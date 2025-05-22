@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.commissionDistribution.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.commission-distributions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionDistribution.fields.id') }}
                        </th>
                        <td>
                            {{ $commissionDistribution->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionDistribution.fields.student') }}
                        </th>
                        <td>
                            {{ $commissionDistribution->student->nationality ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionDistribution.fields.commission_settings') }}
                        </th>
                        <td>
                            {{ $commissionDistribution->commission_settings->comission_commited ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionDistribution.fields.is_commission_paid') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $commissionDistribution->is_commission_paid ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.commission-distributions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection