@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.commissionFromUniversity.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.commission-from-universities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionFromUniversity.fields.id') }}
                        </th>
                        <td>
                            {{ $commissionFromUniversity->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionFromUniversity.fields.university') }}
                        </th>
                        <td>
                            {{ $commissionFromUniversity->university->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionFromUniversity.fields.course') }}
                        </th>
                        <td>
                            {{ $commissionFromUniversity->course->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionFromUniversity.fields.comission') }}
                        </th>
                        <td>
                            {{ $commissionFromUniversity->comission }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.commission-from-universities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection