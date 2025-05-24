@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.student.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.students.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.id') }}
                        </th>
                        <td>
                            {{ $student->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.user') }}
                        </th>
                        <td>
                            {{ $student->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.name') }}
                        </th>
                        <td>
                            {{ $student->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.email') }}
                        </th>
                        <td>
                            {{ $student->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.phone') }}
                        </th>
                        <td>
                            {{ $student->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.nationality') }}
                        </th>
                        <td>
                            {{ $student->nationality->nationality_en ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.address') }}
                        </th>
                        <td>
                            {{ $student->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.current_address') }}
                        </th>
                        <td>
                            {!! $student->current_address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.permanent_address') }}
                        </th>
                        <td>
                            {!! $student->permanent_address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.dob') }}
                        </th>
                        <td>
                            {{ $student->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\Student::GENDER_SELECT[$student->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.passport_no') }}
                        </th>
                        <td>
                            {{ $student->passport_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.emergency_contact') }}
                        </th>
                        <td>
                            {{ $student->emergency_contact }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.guardian_details') }}
                        </th>
                        <td>
                            {!! $student->guardian_details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.education_background') }}
                        </th>
                        <td>
                            {!! $student->education_background !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.lead_agent') }}
                        </th>
                        <td>
                            {{ $student->lead_agent->agency_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.handelling_agent') }}
                        </th>
                        <td>
                            {{ $student->handelling_agent->agency_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.academic_details') }}
                        </th>
                        <td>
                            {!! $student->academic_details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.offer_letter_details') }}
                        </th>
                        <td>
                            {!! $student->offer_letter_details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.additional_requirements') }}
                        </th>
                        <td>
                            {!! $student->additional_requirements !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.val_status') }}
                        </th>
                        <td>
                            {{ $student->val_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.emgs_status') }}
                        </th>
                        <td>
                            {{ $student->emgs_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.commission_amount') }}
                        </th>
                        <td>
                            {{ $student->commission_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.is_offer_given_to_student') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $student->is_offer_given_to_student ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.offer_details') }}
                        </th>
                        <td>
                            {!! $student->offer_details !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.visa_status') }}
                        </th>
                        <td>
                            {{ $student->visa_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.payment_status') }}
                        </th>
                        <td>
                            {{ $student->payment_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.current_status') }}
                        </th>
                        <td>
                            {{ $student->current_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.scholarship_status') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $student->scholarship_status ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.enrollement_status') }}
                        </th>
                        <td>
                            {{ $student->enrollement_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.is_commission_claimed_from_univeristy') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $student->is_commission_claimed_from_univeristy ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.interested_countries') }}
                        </th>
                        <td>
                            @foreach($student->interested_countries as $key => $interested_countries)
                                <span class="label label-info">{{ $interested_countries->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.univertsities') }}
                        </th>
                        <td>
                            @foreach($student->univertsities as $key => $univertsities)
                                <span class="label label-info">{{ $univertsities->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.subjects') }}
                        </th>
                        <td>
                            @foreach($student->subjects as $key => $subjects)
                                <span class="label label-info">{{ $subjects->subject_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.programs') }}
                        </th>
                        <td>
                            @foreach($student->programs as $key => $programs)
                                <span class="label label-info">{{ $programs->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.course_interested') }}
                        </th>
                        <td>
                            @foreach($student->course_interesteds as $key => $course_interested)
                                <span class="label label-info">{{ $course_interested->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.academic_attachments') }}
                        </th>
                        <td>
                            @foreach($student->academic_attachments as $key => $academic_attachments)
                                <span class="label label-info">{{ $academic_attachments->file_url }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.photo') }}
                        </th>
                        <td>
                            @if($student->photo)
                                <a href="{{ $student->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $student->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.academic_certificates') }}
                        </th>
                        <td>
                            @foreach($student->academic_certificates as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.attachments') }}
                        </th>
                        <td>
                            @foreach($student->attachments as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.medical_certificates') }}
                        </th>
                        <td>
                            @foreach($student->medical_certificates as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.students.index') }}">
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
            <a class="nav-link" href="#student_applications" role="tab" data-toggle="tab">
                {{ trans('cruds.application.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#student_commission_distributions" role="tab" data-toggle="tab">
                {{ trans('cruds.commissionDistribution.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="student_applications">
            @includeIf('admin.students.relationships.studentApplications', ['applications' => $student->studentApplications])
        </div>
        <div class="tab-pane" role="tabpanel" id="student_commission_distributions">
            @includeIf('admin.students.relationships.studentCommissionDistributions', ['commissionDistributions' => $student->studentCommissionDistributions])
        </div>
    </div>
</div>

@endsection