@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.agentCommission.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agent-commissions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.id') }}
                        </th>
                        <td>
                            {{ $agentCommission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.agent') }}
                        </th>
                        <td>
                            {{ $agentCommission->agent->agency_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.application') }}
                        </th>
                        <td>
                            {{ $agentCommission->application->intake_term ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.source_type') }}
                        </th>
                        <td>
                            {{ $agentCommission->source_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.commission_type') }}
                        </th>
                        <td>
                            {{ $agentCommission->commission_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.base_amount') }}
                        </th>
                        <td>
                            {{ $agentCommission->base_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.percentage') }}
                        </th>
                        <td>
                            {{ $agentCommission->percentage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.final_amount') }}
                        </th>
                        <td>
                            {{ $agentCommission->final_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.currency') }}
                        </th>
                        <td>
                            {{ $agentCommission->currency }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.payout_method') }}
                        </th>
                        <td>
                            {{ $agentCommission->payout_method }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agentCommission.fields.status') }}
                        </th>
                        <td>
                            {{ $agentCommission->status }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agent-commissions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection