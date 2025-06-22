@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.otherFee.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.other-fees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.id') }}
                        </th>
                        <td>
                            {{ $otherFee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.country') }}
                        </th>
                        <td>
                            {{ $otherFee->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.service_fee') }}
                        </th>
                        <td>
                            {{ $otherFee->service_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.admission_fee') }}
                        </th>
                        <td>
                            {{ $otherFee->admission_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.visa_fee') }}
                        </th>
                        <td>
                            {{ $otherFee->visa_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.emgs_fee') }}
                        </th>
                        <td>
                            {{ $otherFee->emgs_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.registration_fee') }}
                        </th>
                        <td>
                            {{ $otherFee->registration_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.resource_fee') }}
                        </th>
                        <td>
                            {{ $otherFee->resource_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.caution_fee') }}
                        </th>
                        <td>
                            {{ $otherFee->caution_fee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherFee.fields.other_fee_deatils') }}
                        </th>
                        <td>
                            {!! $otherFee->other_fee_deatils !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.other-fees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection