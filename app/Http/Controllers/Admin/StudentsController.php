<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyStudentRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Agent;
use App\Models\Course;
use App\Models\Document;
use App\Models\Student;
use App\Models\Subject;
use App\Models\University;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class StudentsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('student_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = Student::with(['user', 'lead_agent', 'handelling_agent', 'course_interesteds', 'academic_attachments', 'chossen_university', 'subject', 'media'])->get();

        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        abort_if(Gate::denies('student_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lead_agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $handelling_agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_interesteds = Course::pluck('name', 'id');

        $academic_attachments = Document::pluck('file_url', 'id');

        $chossen_universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subjects = Subject::pluck('subject_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.students.create', compact('academic_attachments', 'chossen_universities', 'course_interesteds', 'handelling_agents', 'lead_agents', 'subjects', 'users'));
    }

    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->all());
        $student->course_interesteds()->sync($request->input('course_interesteds', []));
        $student->academic_attachments()->sync($request->input('academic_attachments', []));
        if ($request->input('photo', false)) {
            $student->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        foreach ($request->input('attachments', []) as $file) {
            $student->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('attachments');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $student->id]);
        }

        return redirect()->route('admin.students.index');
    }

    public function edit(Student $student)
    {
        abort_if(Gate::denies('student_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lead_agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $handelling_agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_interesteds = Course::pluck('name', 'id');

        $academic_attachments = Document::pluck('file_url', 'id');

        $chossen_universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subjects = Subject::pluck('subject_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $student->load('user', 'lead_agent', 'handelling_agent', 'course_interesteds', 'academic_attachments', 'chossen_university', 'subject');

        return view('admin.students.edit', compact('academic_attachments', 'chossen_universities', 'course_interesteds', 'handelling_agents', 'lead_agents', 'student', 'subjects', 'users'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->all());
        $student->course_interesteds()->sync($request->input('course_interesteds', []));
        $student->academic_attachments()->sync($request->input('academic_attachments', []));
        if ($request->input('photo', false)) {
            if (! $student->photo || $request->input('photo') !== $student->photo->file_name) {
                if ($student->photo) {
                    $student->photo->delete();
                }
                $student->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($student->photo) {
            $student->photo->delete();
        }

        if (count($student->attachments) > 0) {
            foreach ($student->attachments as $media) {
                if (! in_array($media->file_name, $request->input('attachments', []))) {
                    $media->delete();
                }
            }
        }
        $media = $student->attachments->pluck('file_name')->toArray();
        foreach ($request->input('attachments', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $student->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('attachments');
            }
        }

        return redirect()->route('admin.students.index');
    }

    public function show(Student $student)
    {
        abort_if(Gate::denies('student_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $student->load('user', 'lead_agent', 'handelling_agent', 'course_interesteds', 'academic_attachments', 'chossen_university', 'subject', 'studentApplications', 'studentCommissionDistributions');

        return view('admin.students.show', compact('student'));
    }

    public function destroy(Student $student)
    {
        abort_if(Gate::denies('student_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $student->delete();

        return back();
    }

    public function massDestroy(MassDestroyStudentRequest $request)
    {
        $students = Student::find(request('ids'));

        foreach ($students as $student) {
            $student->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('student_create') && Gate::denies('student_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Student();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
