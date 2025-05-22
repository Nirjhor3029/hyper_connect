@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.course.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.courses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.id') }}
                        </th>
                        <td>
                            {{ $course->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.name') }}
                        </th>
                        <td>
                            {{ $course->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.courses.index') }}">
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
            <a class="nav-link" href="#course_commission_from_universities" role="tab" data-toggle="tab">
                {{ trans('cruds.commissionFromUniversity.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#course_subjects" role="tab" data-toggle="tab">
                {{ trans('cruds.subject.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#curse_commission_settings" role="tab" data-toggle="tab">
                {{ trans('cruds.commissionSetting.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="course_commission_from_universities">
            @includeIf('admin.courses.relationships.courseCommissionFromUniversities', ['commissionFromUniversities' => $course->courseCommissionFromUniversities])
        </div>
        <div class="tab-pane" role="tabpanel" id="course_subjects">
            @includeIf('admin.courses.relationships.courseSubjects', ['subjects' => $course->courseSubjects])
        </div>
        <div class="tab-pane" role="tabpanel" id="curse_commission_settings">
            @includeIf('admin.courses.relationships.curseCommissionSettings', ['commissionSettings' => $course->curseCommissionSettings])
        </div>
    </div>
</div>

@endsection