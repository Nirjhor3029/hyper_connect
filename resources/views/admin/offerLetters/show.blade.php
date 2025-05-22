@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.offerLetter.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.offer-letters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.offerLetter.fields.id') }}
                        </th>
                        <td>
                            {{ $offerLetter->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offerLetter.fields.application') }}
                        </th>
                        <td>
                            {{ $offerLetter->application->intake_term ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offerLetter.fields.file_url') }}
                        </th>
                        <td>
                            {{ $offerLetter->file_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offerLetter.fields.issue_date') }}
                        </th>
                        <td>
                            {{ $offerLetter->issue_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offerLetter.fields.issued_by') }}
                        </th>
                        <td>
                            {{ $offerLetter->issued_by->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offerLetter.fields.delivery_status') }}
                        </th>
                        <td>
                            {{ $offerLetter->delivery_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offerLetter.fields.visible_to_student') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $offerLetter->visible_to_student ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.offer-letters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection