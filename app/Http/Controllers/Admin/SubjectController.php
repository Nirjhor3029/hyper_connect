<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySubjectRequest;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\University;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SubjectController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('subject_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subjects = Subject::with(['university', 'course', 'tags'])->get();

        return view('admin.subjects.index', compact('subjects'));
    }

    public function create()
    {
        abort_if(Gate::denies('subject_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $courses = Course::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        return view('admin.subjects.create', compact('courses', 'tags', 'universities'));
    }

    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->all());
        $subject->tags()->sync($request->input('tags', []));
        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $subject->id]);
        }

        return redirect()->route('admin.subjects.index');
    }

    public function edit(Subject $subject)
    {
        abort_if(Gate::denies('subject_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $courses = Course::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        $subject->load('university', 'course', 'tags');

        return view('admin.subjects.edit', compact('courses', 'subject', 'tags', 'universities'));
    }

    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->update($request->all());
        $subject->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.subjects.index');
    }

    public function show(Subject $subject)
    {
        abort_if(Gate::denies('subject_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subject->load('university', 'course', 'tags', 'subjectsStudents');

        return view('admin.subjects.show', compact('subject'));
    }

    public function destroy(Subject $subject)
    {
        abort_if(Gate::denies('subject_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subject->delete();

        return back();
    }

    public function massDestroy(MassDestroySubjectRequest $request)
    {
        $subjects = Subject::find(request('ids'));

        foreach ($subjects as $subject) {
            $subject->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('subject_create') && Gate::denies('subject_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Subject();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
