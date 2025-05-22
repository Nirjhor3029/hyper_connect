<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCommissionSettingRequest;
use App\Http\Requests\StoreCommissionSettingRequest;
use App\Http\Requests\UpdateCommissionSettingRequest;
use App\Models\Agent;
use App\Models\CommissionSetting;
use App\Models\Course;
use App\Models\University;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommissionSettingsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('commission_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionSettings = CommissionSetting::with(['agent', 'university', 'curse'])->get();

        return view('admin.commissionSettings.index', compact('commissionSettings'));
    }

    public function create()
    {
        abort_if(Gate::denies('commission_setting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $curses = Course::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.commissionSettings.create', compact('agents', 'curses', 'universities'));
    }

    public function store(StoreCommissionSettingRequest $request)
    {
        $commissionSetting = CommissionSetting::create($request->all());

        return redirect()->route('admin.commission-settings.index');
    }

    public function edit(CommissionSetting $commissionSetting)
    {
        abort_if(Gate::denies('commission_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $curses = Course::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $commissionSetting->load('agent', 'university', 'curse');

        return view('admin.commissionSettings.edit', compact('agents', 'commissionSetting', 'curses', 'universities'));
    }

    public function update(UpdateCommissionSettingRequest $request, CommissionSetting $commissionSetting)
    {
        $commissionSetting->update($request->all());

        return redirect()->route('admin.commission-settings.index');
    }

    public function show(CommissionSetting $commissionSetting)
    {
        abort_if(Gate::denies('commission_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionSetting->load('agent', 'university', 'curse', 'commissionSettingsCommissionDistributions');

        return view('admin.commissionSettings.show', compact('commissionSetting'));
    }

    public function destroy(CommissionSetting $commissionSetting)
    {
        abort_if(Gate::denies('commission_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionSetting->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommissionSettingRequest $request)
    {
        $commissionSettings = CommissionSetting::find(request('ids'));

        foreach ($commissionSettings as $commissionSetting) {
            $commissionSetting->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
