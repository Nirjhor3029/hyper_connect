<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyUniversityRequest;
use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Course;
use App\Models\State;
use App\Models\Tag;
use App\Models\University;
// use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class UniversitiesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('university_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::with(['country', 'state', 'city', 'tags', 'media'])->get();

        return view('admin.universities.index', compact('universities'));
    }
    // StudentsController.php

    public function universityShow(Request $request)
    {
        $query = University::query();

        if ($request->filled('country')) {
            $query->where('country_id', $request->country);
        }
        if ($request->filled('tag')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('tags.id', $request->tag);
            });
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $universities = $query->with('country')->paginate(12); // Grid view supports pagination

        $countries = Country::all();
        $tags = Tag::all();

        return view('student.university.index', compact('universities', 'countries','tags'));
    }

    // For university courses

    public function showCourses($id)
    {
        $university = University::findOrFail($id);
        $courses = Course::where('university_id', $id)->get();

        return view('student.university.courses', compact('university', 'courses'));
    }


// For university details
    public function universityDetails($id)
    {
        $university = University::with('country')->findOrFail($id);
        return view('student.university.details', compact('university'));
    }



    public function create()
    {
        abort_if(Gate::denies('university_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = City::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        return view('admin.universities.create', compact('cities', 'countries', 'states', 'tags'));
    }

    public function store(StoreUniversityRequest $request)
    {
        $university = University::create($request->all());

        $submittedTags = $request->input('tags', []); // These are tag names (strings)
        $tagIds = [];

        foreach ($submittedTags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $tagIds[] = $tag->id;
        }

        $university->tags()->sync($tagIds);

        if ($request->input('logo', false)) {
            $university->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $university->id]);
        }

        return redirect()->route('admin.universities.index');
    }

    public function edit(University $university)
    {
        abort_if(Gate::denies('university_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = City::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        $university->load('country', 'state', 'city', 'tags');

        return view('admin.universities.edit', compact('cities', 'countries', 'states', 'tags', 'university'));
    }

    public function update(UpdateUniversityRequest $request, University $university)
    {
        $university->update($request->all());
        $university->tags()->sync($request->input('tags', []));
        if ($request->input('logo', false)) {
            if (! $university->logo || $request->input('logo') !== $university->logo->file_name) {
                if ($university->logo) {
                    $university->logo->delete();
                }
                $university->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($university->logo) {
            $university->logo->delete();
        }

        return redirect()->route('admin.universities.index');
    }

    public function show(University $university)
    {
        abort_if(Gate::denies('university_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $university->load('country', 'state', 'city', 'tags', 'universityUniversityPartnerships', 'universityApplications', 'universityCommissionFromUniversities', 'universitySubjects', 'universityCommissionSettings', 'universityCourses', 'univertsitiesStudents');

        return view('admin.universities.show', compact('university'));
    }

    public function destroy(University $university)
    {
        abort_if(Gate::denies('university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $university->delete();

        return back();
    }

    public function massDestroy(MassDestroyUniversityRequest $request)
    {
        $universities = University::find(request('ids'));

        foreach ($universities as $university) {
            $university->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('university_create') && Gate::denies('university_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new University();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function getStates($countryId)
    {
        $states = State::where('country_id', $countryId)->pluck('name', 'id');
        return response()->json(['states' => $states]);
    }

    public function getCities($stateId)
    {
        $cities = City::where('state_id', $stateId)->pluck('name', 'id');
        return response()->json(['cities' => $cities]);
    }

}
