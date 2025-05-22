@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.universityPartnership.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.university-partnerships.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.id') }}
                        </th>
                        <td>
                            {{ $universityPartnership->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.university') }}
                        </th>
                        <td>
                            {{ $universityPartnership->university->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.partner_name') }}
                        </th>
                        <td>
                            {{ $universityPartnership->partner_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.partner_type') }}
                        </th>
                        <td>
                            {{ $universityPartnership->partner_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.agreement_url') }}
                        </th>
                        <td>
                            {{ $universityPartnership->agreement_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.active_from') }}
                        </th>
                        <td>
                            {{ $universityPartnership->active_from }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.universityPartnership.fields.active_to') }}
                        </th>
                        <td>
                            {{ $universityPartnership->active_to }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.university-partnerships.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection