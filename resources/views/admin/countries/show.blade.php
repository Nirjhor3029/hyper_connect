@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.country.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.countries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.country.fields.id') }}
                        </th>
                        <td>
                            {{ $country->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.country.fields.name') }}
                        </th>
                        <td>
                            {{ $country->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.country.fields.short_code') }}
                        </th>
                        <td>
                            {{ $country->short_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.country.fields.region') }}
                        </th>
                        <td>
                            {{ $country->region }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.country.fields.iso_code') }}
                        </th>
                        <td>
                            {{ $country->iso_code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.countries.index') }}">
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
            <a class="nav-link" href="#country_users" role="tab" data-toggle="tab">
                {{ trans('cruds.user.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#country_universities" role="tab" data-toggle="tab">
                {{ trans('cruds.university.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#country_agents" role="tab" data-toggle="tab">
                {{ trans('cruds.agent.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#interested_countries_students" role="tab" data-toggle="tab">
                {{ trans('cruds.student.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="country_users">
            @includeIf('admin.countries.relationships.countryUsers', ['users' => $country->countryUsers])
        </div>
        <div class="tab-pane" role="tabpanel" id="country_universities">
            @includeIf('admin.countries.relationships.countryUniversities', ['universities' => $country->countryUniversities])
        </div>
        <div class="tab-pane" role="tabpanel" id="country_agents">
            @includeIf('admin.countries.relationships.countryAgents', ['agents' => $country->countryAgents])
        </div>
        <div class="tab-pane" role="tabpanel" id="interested_countries_students">
            @includeIf('admin.countries.relationships.interestedCountriesStudents', ['students' => $country->interestedCountriesStudents])
        </div>
    </div>
</div>

@endsection