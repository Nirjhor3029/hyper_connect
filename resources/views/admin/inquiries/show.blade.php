@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.inquiry.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.inquiries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.inquiry.fields.id') }}
                        </th>
                        <td>
                            {{ $inquiry->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inquiry.fields.name') }}
                        </th>
                        <td>
                            {{ $inquiry->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inquiry.fields.email') }}
                        </th>
                        <td>
                            {{ $inquiry->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inquiry.fields.contact_number') }}
                        </th>
                        <td>
                            {{ $inquiry->contact_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inquiry.fields.nationality') }}
                        </th>
                        <td>
                            {{ $inquiry->nationality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inquiry.fields.dob') }}
                        </th>
                        <td>
                            {{ $inquiry->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inquiry.fields.message') }}
                        </th>
                        <td>
                            {!! $inquiry->message !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.inquiries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection