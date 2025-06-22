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
                            {{ trans('cruds.course.fields.university') }}
                        </th>
                        <td>
                            {{ $course->university->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.program') }}
                        </th>
                        <td>
                            {{ $course->program->type ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_mode') }}
                        </th>
                        <td>
                            {{ App\Models\Course::COURSE_MODE_RADIO[$course->course_mode] ?? '' }}
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
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.duration') }}
                        </th>
                        <td>
                            {{ $course->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.total_fees') }}
                        </th>
                        <td>
                            {{ $course->total_fees }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.no_of_semester') }}
                        </th>
                        <td>
                            {{ $course->no_of_semester }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.course_details') }}
                        </th>
                        <td>
                            {!! $course->course_details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.url') }}
                        </th>
                        <td>
                            {{ $course->url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.scholarship') }}
                        </th>
                        <td>
                            {{ $course->scholarship }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.commission') }}
                        </th>
                        <td>
                            {{ $course->commission }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.english_requirement') }}
                        </th>
                        <td>
                            {{ App\Models\Course::ENGLISH_REQUIREMENT_RADIO[$course->english_requirement] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.course.fields.custom_message_for_student') }}
                        </th>
                        <td>
                            {!! $course->custom_message_for_student !!}
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