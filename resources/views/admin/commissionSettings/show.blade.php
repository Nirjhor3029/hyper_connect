@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.commissionSetting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.commission-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.id') }}
                        </th>
                        <td>
                            {{ $commissionSetting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.agent') }}
                        </th>
                        <td>
                            {{ $commissionSetting->agent->agency_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.university') }}
                        </th>
                        <td>
                            {{ $commissionSetting->university->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.curse') }}
                        </th>
                        <td>
                            {{ $commissionSetting->curse->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionSetting.fields.comission_commited') }}
                        </th>
                        <td>
                            {{ $commissionSetting->comission_commited }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.commission-settings.index') }}">
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
            <a class="nav-link" href="#commission_settings_commission_distributions" role="tab" data-toggle="tab">
                {{ trans('cruds.commissionDistribution.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="commission_settings_commission_distributions">
            @includeIf('admin.commissionSettings.relationships.commissionSettingsCommissionDistributions', ['commissionDistributions' => $commissionSetting->commissionSettingsCommissionDistributions])
        </div>
    </div>
</div>

@endsection