<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCourseRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Country;
use App\Models\Course;
use App\Models\Program;
use App\Models\University;
// use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::with(['university', 'program'])->get();

        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $defaultCountryId = 127; // Malaysia ID

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $universities = collect(); // Empty collection initially
        $programs = collect();     // Empty collection initially


        if ($defaultCountryId) {
            $universities = University::where('country_id', old('country_id', $defaultCountryId))->pluck('name', 'id');
            $programs = Program::where('country_id', old('country_id', $defaultCountryId))->pluck('type', 'id');
        }
        // return $universities;

        return view('admin.courses.create', compact('countries', 'universities', 'programs'));
    }


    public function store(StoreCourseRequest $request)
    {

        // return $request->all();

        // Prepare the year fees array
        $yearFees = [
            '1st_year_fees' => $request->input('1st_year_fees') ?? null,
            '2nd_year_fees' => $request->input('2nd_year_fees') ??  null,
            '3rd_year_fees' => $request->input('3rd_year_fees') ??  null,
            '4th_year_fees' => $request->input('4th_year_fees') ??  null,
        ];

        // Remove null values from the array
        $yearFees = array_filter($yearFees, function ($value) {
            return !is_null($value);  // Keep only non-null values
        });

        $course = Course::create($request->except('country_id'));

        if ($course) {
            $course->year_fees = json_encode($yearFees);
            $course->save();

            if ($media = $request->input('ck-media', false)) {
                Media::whereIn('id', $media)->update(['model_id' => $course->id]);
            }
        }


        return redirect()->route('admin.courses.index');
    }

    public function edit(Course $course)
    {
        abort_if(Gate::denies('course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $programs = Program::pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course->load('university', 'program');

        return view('admin.courses.edit', compact('course', 'programs', 'universities'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->all());

        return redirect()->route('admin.courses.index');
    }

    public function show(Course $course)
    {
        abort_if(Gate::denies('course_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course->load('university', 'program', 'courseCommissionFromUniversities', 'courseSubjects', 'curseCommissionSettings');

        return view('admin.courses.show', compact('course'));
    }

    public function destroy(Course $course)
    {
        abort_if(Gate::denies('course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course->delete();

        return back();
    }

    public function massDestroy(MassDestroyCourseRequest $request)
    {
        $courses = Course::find(request('ids'));

        foreach ($courses as $course) {
            $course->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('course_create') && Gate::denies('course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Course();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function getUniversitiesPrograms($country_id)
    {
        $universities = University::where('country_id', $country_id)->pluck('name', 'id');
        $programs = Program::where('country_id', $country_id)->pluck('type', 'id');

        return response()->json([
            'universities' => $universities,
            'programs' => $programs
        ]);
    }
}
