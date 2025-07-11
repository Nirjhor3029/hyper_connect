@extends('layouts.student')
@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Your All Information</span>

            <a href="{{ route('student.data.edit') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>


        <div class="card-body">
            <div class="form-group">

                <table class="table table-bordered table-striped">
                    <tbody>
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
                                <span class="badge badge-info">{{ $interested_countries->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.univertsities') }}
                        </th>
                        <td>
                            @foreach($student->univertsities as $key => $univertsities)
                                <span class="badge badge-info">{{ $univertsities->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.subjects') }}
                        </th>
                        <td>
                            @foreach($student->subjects as $key => $subjects)
                                <span class="badge badge-info">{{ $subjects->subject_name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.programs') }}
                        </th>
                        <td>
                            @foreach($student->programs as $key => $programs)
                                <span class="badge badge-info">{{ $programs->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.course_interested') }}
                        </th>
                        <td>
                            @foreach($student->course_interesteds as $key => $course_interested)
                                <span class="badge badge-info">{{ $course_interested->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Confirm Country
                        </th>
                        <td>
                            {{$student->confirm_country->name ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Confirm University
                        </th>
                        <td>
                            {{$student->confirm_university->name ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Confirm Subject
                        </th>
                        <td>
                            {{$student->confirm_subject->subject_name ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.academic_attachments') }}
                        </th>
                        <td>
                            @foreach($student->academic_attachments as $key => $academic_attachments)
                                <span class="badge badge-info">{{ $academic_attachments->file_url }}</span>
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
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.max_education_level') }}
                        </th>
                        <td>
                            {{ $student->max_education_level->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.student.fields.offer_letter_attachments') }}
                        </th>
                        <td>
                            @foreach($student->offer_letter_attachments as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>



@endsection
