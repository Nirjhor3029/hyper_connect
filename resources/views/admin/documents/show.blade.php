@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.document.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.documents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.id') }}
                        </th>
                        <td>
                            {{ $document->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.application') }}
                        </th>
                        <td>
                            {{ $document->application->intake_term ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.document_type') }}
                        </th>
                        <td>
                            {{ $document->document_type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.file_url') }}
                        </th>
                        <td>
                            {{ $document->file_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.status') }}
                        </th>
                        <td>
                            {{ $document->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.expiry_date') }}
                        </th>
                        <td>
                            {{ $document->expiry_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.translation_status') }}
                        </th>
                        <td>
                            {{ $document->translation_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.verified_by') }}
                        </th>
                        <td>
                            {{ $document->verified_by->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.verified_at') }}
                        </th>
                        <td>
                            {{ $document->verified_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.document.fields.remarks') }}
                        </th>
                        <td>
                            {!! $document->remarks !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.documents.index') }}">
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
            <a class="nav-link" href="#academic_attachments_students" role="tab" data-toggle="tab">
                {{ trans('cruds.student.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="academic_attachments_students">
            @includeIf('admin.documents.relationships.academicAttachmentsStudents', ['students' => $document->academicAttachmentsStudents])
        </div>
    </div>
</div>

@endsection