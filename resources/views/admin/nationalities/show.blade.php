@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.nationality.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.nationalities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.nationality.fields.id') }}
                        </th>
                        <td>
                            {{ $nationality->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.nationality.fields.num_code') }}
                        </th>
                        <td>
                            {{ $nationality->num_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.nationality.fields.alpha_2_code') }}
                        </th>
                        <td>
                            {{ $nationality->alpha_2_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.nationality.fields.alpha_3_code') }}
                        </th>
                        <td>
                            {{ $nationality->alpha_3_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.nationality.fields.country') }}
                        </th>
                        <td>
                            {{ $nationality->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.nationality.fields.nationality_en') }}
                        </th>
                        <td>
                            {{ $nationality->nationality_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.nationality.fields.nationality_bn') }}
                        </th>
                        <td>
                            {{ $nationality->nationality_bn }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.nationalities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection