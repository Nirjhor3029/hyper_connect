@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.application.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.applications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.id') }}
                        </th>
                        <td>
                            {{ $application->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.student') }}
                        </th>
                        <td>
                            {{ $application->student->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.university') }}
                        </th>
                        <td>
                            {{ $application->university->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.program') }}
                        </th>
                        <td>
                            {{ $application->program->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.agent') }}
                        </th>
                        <td>
                            {{ $application->agent->agency_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.sub_agent') }}
                        </th>
                        <td>
                            {{ $application->sub_agent->agency_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.intake_term') }}
                        </th>
                        <td>
                            {{ $application->intake_term }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.intake_year') }}
                        </th>
                        <td>
                            {{ $application->intake_year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.status') }}
                        </th>
                        <td>
                            {{ $application->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.is_fast_track') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $application->is_fast_track ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.needs_interview') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $application->needs_interview ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.interview_date') }}
                        </th>
                        <td>
                            {{ $application->interview_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.notes') }}
                        </th>
                        <td>
                            {!! $application->notes !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.submitted_at') }}
                        </th>
                        <td>
                            {{ $application->submitted_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.decision_at') }}
                        </th>
                        <td>
                            {{ $application->decision_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.finalized_at') }}
                        </th>
                        <td>
                            {{ $application->finalized_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.applications.index') }}">
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
            <a class="nav-link" href="#application_documents" role="tab" data-toggle="tab">
                {{ trans('cruds.document.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#application_payments" role="tab" data-toggle="tab">
                {{ trans('cruds.payment.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#application_agent_commissions" role="tab" data-toggle="tab">
                {{ trans('cruds.agentCommission.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#application_visa_applications" role="tab" data-toggle="tab">
                {{ trans('cruds.visaApplication.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#application_offer_letters" role="tab" data-toggle="tab">
                {{ trans('cruds.offerLetter.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="application_documents">
            @includeIf('admin.applications.relationships.applicationDocuments', ['documents' => $application->applicationDocuments])
        </div>
        <div class="tab-pane" role="tabpanel" id="application_payments">
            @includeIf('admin.applications.relationships.applicationPayments', ['payments' => $application->applicationPayments])
        </div>
        <div class="tab-pane" role="tabpanel" id="application_agent_commissions">
            @includeIf('admin.applications.relationships.applicationAgentCommissions', ['agentCommissions' => $application->applicationAgentCommissions])
        </div>
        <div class="tab-pane" role="tabpanel" id="application_visa_applications">
            @includeIf('admin.applications.relationships.applicationVisaApplications', ['visaApplications' => $application->applicationVisaApplications])
        </div>
        <div class="tab-pane" role="tabpanel" id="application_offer_letters">
            @includeIf('admin.applications.relationships.applicationOfferLetters', ['offerLetters' => $application->applicationOfferLetters])
        </div>
    </div>
</div>

@endsection