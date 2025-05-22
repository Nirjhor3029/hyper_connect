<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAgentCommissionRequest;
use App\Http\Requests\StoreAgentCommissionRequest;
use App\Http\Requests\UpdateAgentCommissionRequest;
use App\Models\Agent;
use App\Models\AgentCommission;
use App\Models\Application;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgentCommissionsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('agent_commission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agentCommissions = AgentCommission::with(['agent', 'application'])->get();

        return view('admin.agentCommissions.index', compact('agentCommissions'));
    }

    public function create()
    {
        abort_if(Gate::denies('agent_commission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $applications = Application::pluck('intake_term', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.agentCommissions.create', compact('agents', 'applications'));
    }

    public function store(StoreAgentCommissionRequest $request)
    {
        $agentCommission = AgentCommission::create($request->all());

        return redirect()->route('admin.agent-commissions.index');
    }

    public function edit(AgentCommission $agentCommission)
    {
        abort_if(Gate::denies('agent_commission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $applications = Application::pluck('intake_term', 'id')->prepend(trans('global.pleaseSelect'), '');

        $agentCommission->load('agent', 'application');

        return view('admin.agentCommissions.edit', compact('agentCommission', 'agents', 'applications'));
    }

    public function update(UpdateAgentCommissionRequest $request, AgentCommission $agentCommission)
    {
        $agentCommission->update($request->all());

        return redirect()->route('admin.agent-commissions.index');
    }

    public function show(AgentCommission $agentCommission)
    {
        abort_if(Gate::denies('agent_commission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agentCommission->load('agent', 'application');

        return view('admin.agentCommissions.show', compact('agentCommission'));
    }

    public function destroy(AgentCommission $agentCommission)
    {
        abort_if(Gate::denies('agent_commission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agentCommission->delete();

        return back();
    }

    public function massDestroy(MassDestroyAgentCommissionRequest $request)
    {
        $agentCommissions = AgentCommission::find(request('ids'));

        foreach ($agentCommissions as $agentCommission) {
            $agentCommission->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
