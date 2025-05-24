@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.program.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.programs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.id') }}
                        </th>
                        <td>
                            {{ $program->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.university') }}
                        </th>
                        <td>
                            {{ $program->university->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.name') }}
                        </th>
                        <td>
                            {{ $program->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.short_code') }}
                        </th>
                        <td>
                            {{ $program->short_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.field_of_study') }}
                        </th>
                        <td>
                            {{ $program->field_of_study }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.education_type') }}
                        </th>
                        <td>
                            {{ $program->education_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.level') }}
                        </th>
                        <td>
                            {{ $program->level }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.duration_months') }}
                        </th>
                        <td>
                            {{ $program->duration_months }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.credit_hours') }}
                        </th>
                        <td>
                            {{ $program->credit_hours }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.fees') }}
                        </th>
                        <td>
                            {{ $program->fees }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.fee_breakdown') }}
                        </th>
                        <td>
                            {!! $program->fee_breakdown !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.teaching_language') }}
                        </th>
                        <td>
                            {{ $program->teaching_language }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.semester_intake_months') }}
                        </th>
                        <td>
                            {!! $program->semester_intake_months !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.requirements') }}
                        </th>
                        <td>
                            {!! $program->requirements !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.is_active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $program->is_active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.program.fields.tag') }}
                        </th>
                        <td>
                            @foreach($program->tags as $key => $tag)
                                <span class="label label-info">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.programs.index') }}">
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
            <a class="nav-link" href="#program_applications" role="tab" data-toggle="tab">
                {{ trans('cruds.application.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#programs_students" role="tab" data-toggle="tab">
                {{ trans('cruds.student.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="program_applications">
            @includeIf('admin.programs.relationships.programApplications', ['applications' => $program->programApplications])
        </div>
        <div class="tab-pane" role="tabpanel" id="programs_students">
            @includeIf('admin.programs.relationships.programsStudents', ['students' => $program->programsStudents])
        </div>
    </div>
</div>

@endsection