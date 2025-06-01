<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAdmissionStageRequest;
use App\Http\Requests\StoreAdmissionStageRequest;
use App\Http\Requests\UpdateAdmissionStageRequest;
use App\Models\AdmissionStage;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdmissionStageController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('admission_stage_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionStages = AdmissionStage::all();

        return view('admin.admissionStages.index', compact('admissionStages'));
    }

    public function create()
    {
        abort_if(Gate::denies('admission_stage_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.admissionStages.create');
    }

    public function store(StoreAdmissionStageRequest $request)
    {
        $admissionStage = AdmissionStage::create($request->all());

        return redirect()->route('admin.admission-stages.index');
    }

    public function edit(AdmissionStage $admissionStage)
    {
        abort_if(Gate::denies('admission_stage_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.admissionStages.edit', compact('admissionStage'));
    }

    public function update(UpdateAdmissionStageRequest $request, AdmissionStage $admissionStage)
    {
        $admissionStage->update($request->all());

        return redirect()->route('admin.admission-stages.index');
    }

    public function show(AdmissionStage $admissionStage)
    {
        abort_if(Gate::denies('admission_stage_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionStage->load('admissionStageAdmissionStatuses');

        return view('admin.admissionStages.show', compact('admissionStage'));
    }

    public function destroy(AdmissionStage $admissionStage)
    {
        abort_if(Gate::denies('admission_stage_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admissionStage->delete();

        return back();
    }

    public function massDestroy(MassDestroyAdmissionStageRequest $request)
    {
        $admissionStages = AdmissionStage::find(request('ids'));

        foreach ($admissionStages as $admissionStage) {
            $admissionStage->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
