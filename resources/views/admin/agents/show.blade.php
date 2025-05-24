@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.agent.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.id') }}
                        </th>
                        <td>
                            {{ $agent->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.name') }}
                        </th>
                        <td>
                            {{ $agent->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.email') }}
                        </th>
                        <td>
                            {{ $agent->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.phone') }}
                        </th>
                        <td>
                            {{ $agent->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.country') }}
                        </th>
                        <td>
                            {{ $agent->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.address') }}
                        </th>
                        <td>
                            {{ $agent->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.kyc_status') }}
                        </th>
                        <td>
                            {{ App\Models\Agent::KYC_STATUS_RADIO[$agent->kyc_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.agency_name') }}
                        </th>
                        <td>
                            {{ $agent->agency_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.parent_agent') }}
                        </th>
                        <td>
                            {{ $agent->parent_agent->agency_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.tier') }}
                        </th>
                        <td>
                            {{ $agent->tier }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.license_number') }}
                        </th>
                        <td>
                            {{ $agent->license_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.banking_info') }}
                        </th>
                        <td>
                            {{ $agent->banking_info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.commission_policy') }}
                        </th>
                        <td>
                            {!! $agent->commission_policy !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.is_active') }}
                        </th>
                        <td>
                            {{ App\Models\Agent::IS_ACTIVE_RADIO[$agent->is_active] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.user') }}
                        </th>
                        <td>
                            {{ $agent->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#parent_agent_agents" role="tab" data-toggle="tab">
                {{ trans('cruds.agent.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#agent_applications" role="tab" data-toggle="tab">
                {{ trans('cruds.application.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#sub_agent_applications" role="tab" data-toggle="tab">
                {{ trans('cruds.application.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#agent_agent_commissions" role="tab" data-toggle="tab">
                {{ trans('cruds.agentCommission.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#lead_agent_students" role="tab" data-toggle="tab">
                {{ trans('cruds.student.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#handelling_agent_students" role="tab" data-toggle="tab">
                {{ trans('cruds.student.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#agent_commission_settings" role="tab" data-toggle="tab">
                {{ trans('cruds.commissionSetting.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="parent_agent_agents">
            @includeIf('admin.agents.relationships.parentAgentAgents', ['agents' => $agent->parentAgentAgents])
        </div>
        <div class="tab-pane" role="tabpanel" id="agent_applications">
            @includeIf('admin.agents.relationships.agentApplications', ['applications' => $agent->agentApplications])
        </div>
        <div class="tab-pane" role="tabpanel" id="sub_agent_applications">
            @includeIf('admin.agents.relationships.subAgentApplications', ['applications' => $agent->subAgentApplications])
        </div>
        <div class="tab-pane" role="tabpanel" id="agent_agent_commissions">
            @includeIf('admin.agents.relationships.agentAgentCommissions', ['agentCommissions' => $agent->agentAgentCommissions])
        </div>
        <div class="tab-pane" role="tabpanel" id="lead_agent_students">
            @includeIf('admin.agents.relationships.leadAgentStudents', ['students' => $agent->leadAgentStudents])
        </div>
        <div class="tab-pane" role="tabpanel" id="handelling_agent_students">
            @includeIf('admin.agents.relationships.handellingAgentStudents', ['students' => $agent->handellingAgentStudents])
        </div>
        <div class="tab-pane" role="tabpanel" id="agent_commission_settings">
            @includeIf('admin.agents.relationships.agentCommissionSettings', ['commissionSettings' => $agent->agentCommissionSettings])
        </div>
    </div>
</div>

@endsection