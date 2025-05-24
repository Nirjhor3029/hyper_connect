<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCommissionDistributionRequest;
use App\Http\Requests\StoreCommissionDistributionRequest;
use App\Http\Requests\UpdateCommissionDistributionRequest;
use App\Models\CommissionDistribution;
use App\Models\CommissionSetting;
use App\Models\Student;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommissionDistributionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('commission_distribution_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionDistributions = CommissionDistribution::with(['student', 'commission_settings'])->get();

        return view('admin.commissionDistributions.index', compact('commissionDistributions'));
    }

    public function create()
    {
        abort_if(Gate::denies('commission_distribution_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = Student::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $commission_settings = CommissionSetting::pluck('comission_commited', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.commissionDistributions.create', compact('commission_settings', 'students'));
    }

    public function store(StoreCommissionDistributionRequest $request)
    {
        $commissionDistribution = CommissionDistribution::create($request->all());

        return redirect()->route('admin.commission-distributions.index');
    }

    public function edit(CommissionDistribution $commissionDistribution)
    {
        abort_if(Gate::denies('commission_distribution_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = Student::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $commission_settings = CommissionSetting::pluck('comission_commited', 'id')->prepend(trans('global.pleaseSelect'), '');

        $commissionDistribution->load('student', 'commission_settings');

        return view('admin.commissionDistributions.edit', compact('commissionDistribution', 'commission_settings', 'students'));
    }

    public function update(UpdateCommissionDistributionRequest $request, CommissionDistribution $commissionDistribution)
    {
        $commissionDistribution->update($request->all());

        return redirect()->route('admin.commission-distributions.index');
    }

    public function show(CommissionDistribution $commissionDistribution)
    {
        abort_if(Gate::denies('commission_distribution_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionDistribution->load('student', 'commission_settings');

        return view('admin.commissionDistributions.show', compact('commissionDistribution'));
    }

    public function destroy(CommissionDistribution $commissionDistribution)
    {
        abort_if(Gate::denies('commission_distribution_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionDistribution->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommissionDistributionRequest $request)
    {
        $commissionDistributions = CommissionDistribution::find(request('ids'));

        foreach ($commissionDistributions as $commissionDistribution) {
            $commissionDistribution->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
