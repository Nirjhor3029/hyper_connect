<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyUniversityPartnershipRequest;
use App\Http\Requests\StoreUniversityPartnershipRequest;
use App\Http\Requests\UpdateUniversityPartnershipRequest;
use App\Models\University;
use App\Models\UniversityPartnership;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class UniversityPartnershipsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('university_partnership_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universityPartnerships = UniversityPartnership::with(['university', 'media'])->get();

        return view('admin.universityPartnerships.index', compact('universityPartnerships'));
    }

    public function create()
    {
        abort_if(Gate::denies('university_partnership_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.universityPartnerships.create', compact('universities'));
    }

    public function store(StoreUniversityPartnershipRequest $request)
    {
        $universityPartnership = UniversityPartnership::create($request->all());

        foreach ($request->input('agreement_file', []) as $file) {
            $universityPartnership->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('agreement_file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $universityPartnership->id]);
        }

        return redirect()->route('admin.university-partnerships.index');
    }

    public function edit(UniversityPartnership $universityPartnership)
    {
        abort_if(Gate::denies('university_partnership_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $universityPartnership->load('university');

        return view('admin.universityPartnerships.edit', compact('universities', 'universityPartnership'));
    }

    public function update(UpdateUniversityPartnershipRequest $request, UniversityPartnership $universityPartnership)
    {
        $universityPartnership->update($request->all());

        if (count($universityPartnership->agreement_file) > 0) {
            foreach ($universityPartnership->agreement_file as $media) {
                if (! in_array($media->file_name, $request->input('agreement_file', []))) {
                    $media->delete();
                }
            }
        }
        $media = $universityPartnership->agreement_file->pluck('file_name')->toArray();
        foreach ($request->input('agreement_file', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $universityPartnership->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('agreement_file');
            }
        }

        return redirect()->route('admin.university-partnerships.index');
    }

    public function show(UniversityPartnership $universityPartnership)
    {
        abort_if(Gate::denies('university_partnership_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universityPartnership->load('university');

        return view('admin.universityPartnerships.show', compact('universityPartnership'));
    }

    public function destroy(UniversityPartnership $universityPartnership)
    {
        abort_if(Gate::denies('university_partnership_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universityPartnership->delete();

        return back();
    }

    public function massDestroy(MassDestroyUniversityPartnershipRequest $request)
    {
        $universityPartnerships = UniversityPartnership::find(request('ids'));

        foreach ($universityPartnerships as $universityPartnership) {
            $universityPartnership->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('university_partnership_create') && Gate::denies('university_partnership_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new UniversityPartnership();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
