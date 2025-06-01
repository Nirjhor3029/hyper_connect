<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAdmissionStatusRequest;
use App\Http\Requests\StoreAdmissionStatusRequest;
use App\Http\Requests\UpdateAdmissionStatusRequest;
use App\Models\AdmissionStage;
use App\Models\AdmissionStatus;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AdmissionStatusController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('admission_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionStatuses = AdmissionStatus::with(['admission_stage'])->get();

        return view('admin.admissionStatuses.index', compact('admissionStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('admission_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admission_stages = AdmissionStage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.admissionStatuses.create', compact('admission_stages'));
    }

    public function store(StoreAdmissionStatusRequest $request)
    {
        $admissionStatus = AdmissionStatus::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $admissionStatus->id]);
        }

        return redirect()->route('admin.admission-statuses.index');
    }

    public function edit(AdmissionStatus $admissionStatus)
    {
        abort_if(Gate::denies('admission_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admission_stages = AdmissionStage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $admissionStatus->load('admission_stage');

        return view('admin.admissionStatuses.edit', compact('admissionStatus', 'admission_stages'));
    }

    public function update(UpdateAdmissionStatusRequest $request, AdmissionStatus $admissionStatus)
    {
        $admissionStatus->update($request->all());

        return redirect()->route('admin.admission-statuses.index');
    }

    public function show(AdmissionStatus $admissionStatus)
    {
        abort_if(Gate::denies('admission_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionStatus->load('admission_stage');

        return view('admin.admissionStatuses.show', compact('admissionStatus'));
    }

    public function destroy(AdmissionStatus $admissionStatus)
    {
        abort_if(Gate::denies('admission_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyAdmissionStatusRequest $request)
    {
        $admissionStatuses = AdmissionStatus::find(request('ids'));

        foreach ($admissionStatuses as $admissionStatus) {
            $admissionStatus->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('admission_status_create') && Gate::denies('admission_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AdmissionStatus();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
