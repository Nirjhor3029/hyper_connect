<?php

namespace App\Http\Controllers\Admin;

use App\Models\EducationLevel;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Country;
use App\Models\Nationality;
use App\Models\Subject;
use App\Models\University;
use App\Models\Program;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyStudentRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Agent;

use App\Models\Course;
use App\Models\Document;
use App\Models\Upload;
use App\Models\User;
// use Gate;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class StudentsController extends Controller
{
    use MediaUploadingTrait;



    public function index(Request $request)
    {
        abort_if(Gate::denies('student_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $query = Student::with([
            'user',
            'nationality',
            'confirm_country',
            'confirm_university',
            'confirm_program',
            'confirm_subject',
            'lead_agent',
            'handelling_agent',
            'interested_countries',
            'univertsities',
            'subjects',
            // 'programs', 
            'course_interesteds',
            'academic_attachments',
            'media'
        ]);

        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%$keyword%")
                    ->orWhere('email', 'like', "%$keyword%")
                    ->orWhere('phone', 'like', "%$keyword%");
            });
        }

        if ($request->filled('agent_id')) {
            $query->where(function ($q) use ($request) {
                $q->where('lead_agent_id', $request->agent_id)
                    ->orWhere('handelling_agent_id', $request->agent_id);
            });
        }

        if ($request->filled('nationality_id')) {
            $query->where('nationality_id', $request->nationality_id);
        }

        if ($request->filled('subject_id')) {
            $query->whereHas('subjects', fn($q) => $q->where('subjects.id', $request->subject_id));
        }

        if ($request->filled('university_id')) {
            $query->whereHas('univertsities', fn($q) => $q->where('universities.id', $request->university_id));
        }

        if ($request->filled('program_id')) {
            $query->whereHas('programs', fn($q) => $q->where('programs.id', $request->program_id));
        }

        $students = $query->get();

        // Dropdown options
        $agents = Agent::pluck('name', 'id');
        $nationalities = Nationality::pluck('nationality_en', 'id');
        $subjects = Subject::pluck('subject_name', 'id');
        $universities = University::pluck('name', 'id');
        $programs = Program::pluck('type', 'id');

        return view('admin.students.index', compact('students', 'agents', 'nationalities', 'subjects', 'universities', 'programs'));
    }

    public function create()
    {
        abort_if(Gate::denies('student_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nationalities = Nationality::pluck('nationality_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lead_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $handelling_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $interested_countries = Country::pluck('name', 'id');

        $univertsities = University::pluck('name', 'id');

        $subjects = Subject::pluck('subject_name', 'id');

        $programs = Program::pluck('type', 'id');

        $course_interesteds = Course::pluck('name', 'id');

        $academic_attachments = Document::pluck('file_url', 'id');
        $max_education_levels = EducationLevel::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');



        return view('admin.students.create', compact('academic_attachments', 'course_interesteds', 'handelling_agents', 'interested_countries', 'lead_agents', 'nationalities', 'programs', 'subjects', 'univertsities', 'users', 'countries', 'max_education_levels'));
    }

    public function getNationalities($countryId)
    {
        $country = Country::findOrFail($countryId);
        $nationality = Nationality::where('country', $country->name)->first();

        return response()->json($nationality ? [$nationality->id => $nationality->nationality_en] : []);
    }



    public function store(StoreStudentRequest $request)
    {
        $request['password'] = Hash::make('123456');
        $data = $request->all();

        $user = Auth::user();
        $isAgent = $user->roles()->where('id', 3)->exists();

        if ($isAgent) {

            $agent = Agent::where('user_id', $user->id)->first();

            if ($agent) {

                $data['lead_agent_id'] = $agent->id;
                $data['handelling_agent_id'] = $agent->id;
            }
        }


        $student = Student::create($data);
        $student->interested_countries()->sync($request->input('interested_countries', []));
        $student->univertsities()->sync($request->input('univertsities', []));
        $student->subjects()->sync($request->input('subjects', []));
        $student->programs()->sync($request->input('programs', []));
        $student->course_interesteds()->sync($request->input('course_interesteds', []));
        $student->academic_attachments()->sync($request->input('academic_attachments', []));
        if ($request->input('photo', false)) {
            $student->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        foreach ($request->input('academic_certificates', []) as $file) {
            $student->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('academic_certificates');
        }

        foreach ($request->input('attachments', []) as $file) {
            $student->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('attachments');
        }

        foreach ($request->input('medical_certificates', []) as $file) {
            $student->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('medical_certificates');
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

        $nationalities = Nationality::pluck('nationality_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lead_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $handelling_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $interested_countries = Country::pluck('name', 'id');

        $univertsities = University::pluck('name', 'id');

        $subjects = Subject::pluck('subject_name', 'id');

        $programs = Program::pluck('type', 'id');

        $course_interesteds = Course::pluck('name', 'id');

        $academic_attachments = Document::pluck('file_url', 'id');
        $max_education_levels = EducationLevel::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');


        $student->load('user', 'nationality', 'lead_agent', 'handelling_agent', 'interested_countries', 'univertsities', 'subjects', 'programs', 'course_interesteds', 'academic_attachments');

        $url = url()->previous();

        return view('admin.students.edit', compact('academic_attachments', 'course_interesteds', 'handelling_agents', 'interested_countries', 'lead_agents', 'nationalities', 'programs', 'student', 'subjects', 'univertsities', 'users', 'max_education_levels', 'url'));
    }

    public function convertProspectus($id)
    {
        abort_if(Gate::denies('student_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $url = url()->previous();


        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nationalities = Nationality::pluck('nationality_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lead_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $handelling_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $interested_countries = Country::pluck('name', 'id');

        $univertsities = University::pluck('name', 'id');

        $subjects = Subject::pluck('subject_name', 'id');

        $programs = Program::pluck('type', 'id');

        $course_interesteds = Course::pluck('name', 'id');

        $academic_attachments = Document::pluck('file_url', 'id');
        $max_education_levels = EducationLevel::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $student = Student::find($id);
        $student->load('user', 'nationality', 'lead_agent', 'handelling_agent', 'interested_countries', 'univertsities', 'subjects', 'programs', 'course_interesteds', 'academic_attachments');

        return view('admin.students.convert_prospectus', compact('academic_attachments', 'course_interesteds', 'handelling_agents', 'interested_countries', 'lead_agents', 'nationalities', 'programs', 'student', 'subjects', 'univertsities', 'users', 'max_education_levels', 'url'));
    }
    public function offerLetters($id)
    {
        abort_if(Gate::denies('student_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $url = url()->previous();

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nationalities = Nationality::pluck('nationality_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lead_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $handelling_agents = Agent::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $interested_countries = Country::pluck('name', 'id');

        $univertsities = University::pluck('name', 'id');

        $subjects = Subject::pluck('subject_name', 'id');

        $programs = Program::pluck('type', 'id');

        $course_interesteds = Course::pluck('name', 'id');

        $academic_attachments = Document::pluck('file_url', 'id');
        $max_education_levels = EducationLevel::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $student = Student::find($id);
        $student->load('user', 'nationality', 'lead_agent', 'handelling_agent', 'interested_countries', 'univertsities', 'subjects', 'programs', 'course_interesteds', 'academic_attachments');

        return view('admin.students.offer_letter', compact('academic_attachments', 'course_interesteds', 'handelling_agents', 'interested_countries', 'lead_agents', 'nationalities', 'programs', 'student', 'subjects', 'univertsities', 'users', 'max_education_levels', 'url'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->all());
        $student->interested_countries()->sync($request->input('interested_countries', []));
        $student->univertsities()->sync($request->input('univertsities', []));
        $student->subjects()->sync($request->input('subjects', []));
        $student->programs()->sync($request->input('programs', []));
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

        if (count($student->academic_certificates) > 0) {
            foreach ($student->academic_certificates as $media) {
                if (! in_array($media->file_name, $request->input('academic_certificates', []))) {
                    $media->delete();
                }
            }
        }
        $media = $student->academic_certificates->pluck('file_name')->toArray();
        foreach ($request->input('academic_certificates', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $student->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('academic_certificates');
            }
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

        if (count($student->medical_certificates) > 0) {
            foreach ($student->medical_certificates as $media) {
                if (! in_array($media->file_name, $request->input('medical_certificates', []))) {
                    $media->delete();
                }
            }
        }
        $media = $student->medical_certificates->pluck('file_name')->toArray();
        foreach ($request->input('medical_certificates', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $student->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('medical_certificates');
            }
        }

        if (count($student->offer_letter_attachments) > 0) {
            foreach ($student->offer_letter_attachments as $media) {
                if (! in_array($media->file_name, $request->input('offer_letter_attachments', []))) {
                    $media->delete();
                }
            }
        }
        $media = $student->offer_letter_attachments->pluck('file_name')->toArray();
        foreach ($request->input('offer_letter_attachments', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $student->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('offer_letter_attachments');
            }
        }

        if ($request->url) {
            return redirect()->to($request->url);
        } else {
            return redirect()->route('admin.students.index');
        }
    }



    public function show(Student $student)
    {
        abort_if(Gate::denies('student_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $student->load('user', 'nationality', 'lead_agent', 'handelling_agent', 'confirm_country', 'confirm_university', 'confirm_program', 'confirm_subject', 'interested_countries', 'univertsities', 'subjects', 'programs', 'course_interesteds', 'academic_attachments', 'studentApplications', 'studentCommissionDistributions');

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





    public function getApplicantList()
    {
        // $applicants = Student::where('is_applicant', 1)->get();
        $applicants = Student::get();
        // return $applicants;
        return view('admin.students.applicant_list', compact('applicants'));
    }



    public function getApplicantDetails($applicant_id)
    {
        $student_id = $applicant_id - 1000;
        $applicant = Student::find($student_id);

        // $authUser = auth()->user();

        // $countries = Country::all();
        // $selected_country = null;
        // if (isset($authUser->country_id)) {
        //     $selected_country = Country::find($authUser->country_id);
        // }

        $education_levels = EducationLevel::all();

        $student_highest_education_level = (isset($applicant->educationLevel) && count($applicant->educationLevel) > 0) ?  $applicant->educationLevel[0] : [];
        $test = (isset($applicant->tests) && count($applicant->tests) > 0) ? $applicant->tests[0] : [];
        // return $test;
        // return $student_highest_education_level->pivot->program;

        $uploads = $applicant->uploads;

        // return $uploads;

        // return $applicants;
        return view('admin.students.applicant_details', compact(
            'applicant',
            'education_levels',
            'student_highest_education_level',
            'test',
            'uploads'
        ));
    }

    public function changeDocumentStatus(Request $request)
    {
        if (!$request->id || !$request->status) {
            return response()->json([
                'success' => false,
                'status' => '400',
                'message' => 'File id or status is missing'
            ], 400);
        }

        $file_id = $request->id;
        $file_status = $request->status;
        $status_reason = $request->status_reason ?? null;


        $document = Upload::find($file_id);
        $document->file_status = $file_status;
        $document->admin_comment = $status_reason;
        $document->updated_by = auth()->user()->id;
        $document->save();

        return response()->json([
            'success' => true,
            'status' => '200',
            'message' => 'File status updated successfully'
        ], 200);
    }
}
