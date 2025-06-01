@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.admissionStatus.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.admission-statuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStatus.fields.id') }}
                        </th>
                        <td>
                            {{ $admissionStatus->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStatus.fields.title') }}
                        </th>
                        <td>
                            {{ $admissionStatus->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStatus.fields.description') }}
                        </th>
                        <td>
                            {!! $admissionStatus->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStatus.fields.sequence') }}
                        </th>
                        <td>
                            {{ $admissionStatus->sequence }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.admissionStatus.fields.admission_stage') }}
                        </th>
                        <td>
                            {{ $admissionStatus->admission_stage->title ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.admission-statuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection