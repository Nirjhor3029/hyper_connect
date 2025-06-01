@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.admissionStage.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.admission-stages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStage.fields.id') }}
                        </th>
                        <td>
                            {{ $admissionStage->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStage.fields.title') }}
                        </th>
                        <td>
                            {{ $admissionStage->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStage.fields.description') }}
                        </th>
                        <td>
                            {{ $admissionStage->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStage.fields.sequence') }}
                        </th>
                        <td>
                            {{ $admissionStage->sequence }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.admission-stages.index') }}">
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
            <a class="nav-link" href="#admission_stage_admission_statuses" role="tab" data-toggle="tab">
                {{ trans('cruds.admissionStatus.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="admission_stage_admission_statuses">
            @includeIf('admin.admissionStages.relationships.admissionStageAdmissionStatuses', ['admissionStatuses' => $admissionStage->admissionStageAdmissionStatuses])
        </div>
    </div>
</div>

@endsection