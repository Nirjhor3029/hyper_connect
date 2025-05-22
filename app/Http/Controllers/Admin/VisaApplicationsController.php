<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVisaApplicationRequest;
use App\Http\Requests\StoreVisaApplicationRequest;
use App\Http\Requests\UpdateVisaApplicationRequest;
use App\Models\Application;
use App\Models\VisaApplication;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisaApplicationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('visa_application_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaApplications = VisaApplication::with(['application'])->get();

        return view('admin.visaApplications.index', compact('visaApplications'));
    }

    public function create()
    {
        abort_if(Gate::denies('visa_application_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applications = Application::pluck('intake_term', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.visaApplications.create', compact('applications'));
    }

    public function store(StoreVisaApplicationRequest $request)
    {
        $visaApplication = VisaApplication::create($request->all());

        return redirect()->route('admin.visa-applications.index');
    }

    public function edit(VisaApplication $visaApplication)
    {
        abort_if(Gate::denies('visa_application_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applications = Application::pluck('intake_term', 'id')->prepend(trans('global.pleaseSelect'), '');

        $visaApplication->load('application');

        return view('admin.visaApplications.edit', compact('applications', 'visaApplication'));
    }

    public function update(UpdateVisaApplicationRequest $request, VisaApplication $visaApplication)
    {
        $visaApplication->update($request->all());

        return redirect()->route('admin.visa-applications.index');
    }

    public function show(VisaApplication $visaApplication)
    {
        abort_if(Gate::denies('visa_application_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaApplication->load('application');

        return view('admin.visaApplications.show', compact('visaApplication'));
    }

    public function destroy(VisaApplication $visaApplication)
    {
        abort_if(Gate::denies('visa_application_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaApplication->delete();

        return back();
    }

    public function massDestroy(MassDestroyVisaApplicationRequest $request)
    {
        $visaApplications = VisaApplication::find(request('ids'));

        foreach ($visaApplications as $visaApplication) {
            $visaApplication->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
