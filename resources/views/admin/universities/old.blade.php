@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.university.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.universities.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    {{--<tr>
                        <th>
                            {{ trans('cruds.university.fields.id') }}
                        </th>
                        <td>
                            {{ $university->id }}
                        </td>
                    </tr>--}}
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.country') }}
                        </th>
                        <td>
                            {{ $university->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.state') }}
                        </th>
                        <td>
                            {{ $university->state->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.city') }}
                        </th>
                        <td>
                            {{ $university->city->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.name') }}
                        </th>
                        <td>
                            {{ $university->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.code') }}
                        </th>
                        <td>
                            {{ $university->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.university_type') }}
                        </th>
                        <td>
                            {{ $university->university_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.address') }}
                        </th>
                        <td>
                            {!! $university->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.university_details') }}
                        </th>
                        <td>
                            {!! $university->university_details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.accreditation') }}
                        </th>
                        <td>
                            {{ $university->accreditation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.website') }}
                        </th>
                        <td>
                            {{ $university->website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.contact_email') }}
                        </th>
                        <td>
                            {{ $university->contact_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.contact_phone') }}
                        </th>
                        <td>
                            {{ $university->contact_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.logo') }}
                        </th>
                        <td>
                            @if($university->logo)
                                <a href="{{ $university->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $university->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.logo_url') }}
                        </th>
                        <td>
                            {{ $university->logo_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.is_active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $university->is_active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.university.fields.tags') }}
                        </th>
                        <td>
                            @foreach($university->tags as $key => $tags)
                                <span class="label label-info">{{ $tags->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.universities.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="card">
        <div class="card-header">
            {{ trans('global.relatedData') }}
        </div>
        <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#university_university_partnerships" role="tab" data-toggle="tab">
                    {{ trans('cruds.universityPartnership.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#university_applications" role="tab" data-toggle="tab">
                    {{ trans('cruds.application.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#university_commission_from_universities" role="tab" data-toggle="tab">
                    {{ trans('cruds.commissionFromUniversity.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#university_subjects" role="tab" data-toggle="tab">
                    {{ trans('cruds.subject.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#university_commission_settings" role="tab" data-toggle="tab">
                    {{ trans('cruds.commissionSetting.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#university_courses" role="tab" data-toggle="tab">
                    {{ trans('cruds.course.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#univertsities_students" role="tab" data-toggle="tab">
                    {{ trans('cruds.student.title') }}
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" role="tabpanel" id="university_university_partnerships">
                @includeIf('admin.universities.relationships.universityUniversityPartnerships', ['universityPartnerships' => $university->universityUniversityPartnerships])
            </div>
            <div class="tab-pane" role="tabpanel" id="university_applications">
                @includeIf('admin.universities.relationships.universityApplications', ['applications' => $university->universityApplications])
            </div>
            <div class="tab-pane" role="tabpanel" id="university_commission_from_universities">
                @includeIf('admin.universities.relationships.universityCommissionFromUniversities', ['commissionFromUniversities' => $university->universityCommissionFromUniversities])
            </div>
            <div class="tab-pane" role="tabpanel" id="university_subjects">
                @includeIf('admin.universities.relationships.universitySubjects', ['subjects' => $university->universitySubjects])
            </div>
            <div class="tab-pane" role="tabpanel" id="university_commission_settings">
                @includeIf('admin.universities.relationships.universityCommissionSettings', ['commissionSettings' => $university->universityCommissionSettings])
            </div>
            <div class="tab-pane" role="tabpanel" id="university_courses">
                @includeIf('admin.universities.relationships.universityCourses', ['courses' => $university->universityCourses])
            </div>
            <div class="tab-pane" role="tabpanel" id="univertsities_students">
                @includeIf('admin.universities.relationships.univertsitiesStudents', ['students' => $university->univertsitiesStudents])
            </div>
        </div>
    </div>--}}

@endsection
