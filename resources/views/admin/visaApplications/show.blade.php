@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.visaApplication.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.visa-applications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.id') }}
                        </th>
                        <td>
                            {{ $visaApplication->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.application') }}
                        </th>
                        <td>
                            {{ $visaApplication->application->intake_term ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.visa_type') }}
                        </th>
                        <td>
                            {{ $visaApplication->visa_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.current_stage') }}
                        </th>
                        <td>
                            {{ $visaApplication->current_stage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.status') }}
                        </th>
                        <td>
                            {{ $visaApplication->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.submitted_at') }}
                        </th>
                        <td>
                            {{ $visaApplication->submitted_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.approved_at') }}
                        </th>
                        <td>
                            {{ $visaApplication->approved_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.issued_at') }}
                        </th>
                        <td>
                            {{ $visaApplication->issued_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.visaApplication.fields.expires_at') }}
                        </th>
                        <td>
                            {{ $visaApplication->expires_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.visa-applications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection