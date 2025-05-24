@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.student.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.students.store") }}" enctype="multipart/form-data">
            @csrf
        {{--    <div class="form-group">
                <label for="user_id">{{ trans('cruds.student.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.user_helper') }}</span>
            </div>--}}
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.student.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.student.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.student.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nationality_id">{{ trans('cruds.student.fields.nationality') }}</label>
                <select class="form-control select2 {{ $errors->has('nationality') ? 'is-invalid' : '' }}" name="nationality_id" id="nationality_id" required>
                    @foreach($nationalities as $id => $entry)
                        <option value="{{ $id }}" {{ old('nationality_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('nationality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.nationality_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.student.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address') }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="current_address">{{ trans('cruds.student.fields.current_address') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('current_address') ? 'is-invalid' : '' }}" name="current_address" id="current_address">{!! old('current_address') !!}</textarea>
                @if($errors->has('current_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.current_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="permanent_address">{{ trans('cruds.student.fields.permanent_address') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('permanent_address') ? 'is-invalid' : '' }}" name="permanent_address" id="permanent_address">{!! old('permanent_address') !!}</textarea>
                @if($errors->has('permanent_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permanent_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.permanent_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">{{ trans('cruds.student.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob') }}">
                @if($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.student.fields.gender') }}</label>
                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender">
                    <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Student::GENDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="passport_no">{{ trans('cruds.student.fields.passport_no') }}</label>
                <input class="form-control {{ $errors->has('passport_no') ? 'is-invalid' : '' }}" type="text" name="passport_no" id="passport_no" value="{{ old('passport_no', '') }}">
                @if($errors->has('passport_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('passport_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.passport_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emergency_contact">{{ trans('cruds.student.fields.emergency_contact') }}</label>
                <textarea class="form-control {{ $errors->has('emergency_contact') ? 'is-invalid' : '' }}" name="emergency_contact" id="emergency_contact">{{ old('emergency_contact') }}</textarea>
                @if($errors->has('emergency_contact'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emergency_contact') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.emergency_contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="guardian_details">{{ trans('cruds.student.fields.guardian_details') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('guardian_details') ? 'is-invalid' : '' }}" name="guardian_details" id="guardian_details">{!! old('guardian_details') !!}</textarea>
                @if($errors->has('guardian_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('guardian_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.guardian_details_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="education_background">{{ trans('cruds.student.fields.education_background') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('education_background') ? 'is-invalid' : '' }}" name="education_background" id="education_background">{!! old('education_background') !!}</textarea>
                @if($errors->has('education_background'))
                    <div class="invalid-feedback">
                        {{ $errors->first('education_background') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.education_background_helper') }}</span>
            </div>
            <input type="hidden" name="lead_agent_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
            <input type="hidden" name="handelling_agent_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
           {{-- <div class="form-group">
                <label for="lead_agent_id">{{ trans('cruds.student.fields.lead_agent') }}</label>
                <select class="form-control select2 {{ $errors->has('lead_agent') ? 'is-invalid' : '' }}" name="lead_agent_id" id="lead_agent_id">
                    @foreach($lead_agents as $id => $entry)
                        <option value="{{ $id }}" {{ old('lead_agent_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('lead_agent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lead_agent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.lead_agent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="handelling_agent_id">{{ trans('cruds.student.fields.handelling_agent') }}</label>
                <select class="form-control select2 {{ $errors->has('handelling_agent') ? 'is-invalid' : '' }}" name="handelling_agent_id" id="handelling_agent_id">
                    @foreach($handelling_agents as $id => $entry)
                        <option value="{{ $id }}" {{ old('handelling_agent_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('handelling_agent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('handelling_agent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.handelling_agent_helper') }}</span>
            </div>--}}
            <div class="form-group">
                <label for="academic_details">{{ trans('cruds.student.fields.academic_details') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('academic_details') ? 'is-invalid' : '' }}" name="academic_details" id="academic_details">{!! old('academic_details') !!}</textarea>
                @if($errors->has('academic_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('academic_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.academic_details_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="offer_letter_details">{{ trans('cruds.student.fields.offer_letter_details') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('offer_letter_details') ? 'is-invalid' : '' }}" name="offer_letter_details" id="offer_letter_details">{!! old('offer_letter_details') !!}</textarea>
                @if($errors->has('offer_letter_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('offer_letter_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.offer_letter_details_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="additional_requirements">{{ trans('cruds.student.fields.additional_requirements') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('additional_requirements') ? 'is-invalid' : '' }}" name="additional_requirements" id="additional_requirements">{!! old('additional_requirements') !!}</textarea>
                @if($errors->has('additional_requirements'))
                    <div class="invalid-feedback">
                        {{ $errors->first('additional_requirements') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.additional_requirements_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="val_status">{{ trans('cruds.student.fields.val_status') }}</label>
                <input class="form-control {{ $errors->has('val_status') ? 'is-invalid' : '' }}" type="text" name="val_status" id="val_status" value="{{ old('val_status', '') }}">
                @if($errors->has('val_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('val_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.val_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emgs_status">{{ trans('cruds.student.fields.emgs_status') }}</label>
                <input class="form-control {{ $errors->has('emgs_status') ? 'is-invalid' : '' }}" type="text" name="emgs_status" id="emgs_status" value="{{ old('emgs_status', '') }}">
                @if($errors->has('emgs_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emgs_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.emgs_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commission_amount">{{ trans('cruds.student.fields.commission_amount') }}</label>
                <input class="form-control {{ $errors->has('commission_amount') ? 'is-invalid' : '' }}" type="number" name="commission_amount" id="commission_amount" value="{{ old('commission_amount', '') }}" step="0.01">
                @if($errors->has('commission_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.commission_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_offer_given_to_student') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_offer_given_to_student" value="0">
                    <input class="form-check-input" type="checkbox" name="is_offer_given_to_student" id="is_offer_given_to_student" value="1" {{ old('is_offer_given_to_student', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_offer_given_to_student">{{ trans('cruds.student.fields.is_offer_given_to_student') }}</label>
                </div>
                @if($errors->has('is_offer_given_to_student'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_offer_given_to_student') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.is_offer_given_to_student_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="offer_details">{{ trans('cruds.student.fields.offer_details') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('offer_details') ? 'is-invalid' : '' }}" name="offer_details" id="offer_details">{!! old('offer_details') !!}</textarea>
                @if($errors->has('offer_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('offer_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.offer_details_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visa_status">{{ trans('cruds.student.fields.visa_status') }}</label>
                <input class="form-control {{ $errors->has('visa_status') ? 'is-invalid' : '' }}" type="text" name="visa_status" id="visa_status" value="{{ old('visa_status', '') }}">
                @if($errors->has('visa_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visa_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.visa_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_status">{{ trans('cruds.student.fields.payment_status') }}</label>
                <input class="form-control {{ $errors->has('payment_status') ? 'is-invalid' : '' }}" type="text" name="payment_status" id="payment_status" value="{{ old('payment_status', '') }}">
                @if($errors->has('payment_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.payment_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="current_status">{{ trans('cruds.student.fields.current_status') }}</label>
                <input class="form-control {{ $errors->has('current_status') ? 'is-invalid' : '' }}" type="text" name="current_status" id="current_status" value="{{ old('current_status', '') }}">
                @if($errors->has('current_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.current_status_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('scholarship_status') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="scholarship_status" value="0">
                    <input class="form-check-input" type="checkbox" name="scholarship_status" id="scholarship_status" value="1" {{ old('scholarship_status', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="scholarship_status">{{ trans('cruds.student.fields.scholarship_status') }}</label>
                </div>
                @if($errors->has('scholarship_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('scholarship_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.scholarship_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="enrollement_status">{{ trans('cruds.student.fields.enrollement_status') }}</label>
                <input class="form-control {{ $errors->has('enrollement_status') ? 'is-invalid' : '' }}" type="text" name="enrollement_status" id="enrollement_status" value="{{ old('enrollement_status', '') }}">
                @if($errors->has('enrollement_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enrollement_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.enrollement_status_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_commission_claimed_from_univeristy') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_commission_claimed_from_univeristy" value="0">
                    <input class="form-check-input" type="checkbox" name="is_commission_claimed_from_univeristy" id="is_commission_claimed_from_univeristy" value="1" {{ old('is_commission_claimed_from_univeristy', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_commission_claimed_from_univeristy">{{ trans('cruds.student.fields.is_commission_claimed_from_univeristy') }}</label>
                </div>
                @if($errors->has('is_commission_claimed_from_univeristy'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_commission_claimed_from_univeristy') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.is_commission_claimed_from_univeristy_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="interested_countries">{{ trans('cruds.student.fields.interested_countries') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('interested_countries') ? 'is-invalid' : '' }}" name="interested_countries[]" id="interested_countries" multiple>
                    @foreach($interested_countries as $id => $interested_country)
                        <option value="{{ $id }}" {{ in_array($id, old('interested_countries', [])) ? 'selected' : '' }}>{{ $interested_country }}</option>
                    @endforeach
                </select>
                @if($errors->has('interested_countries'))
                    <div class="invalid-feedback">
                        {{ $errors->first('interested_countries') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.interested_countries_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="univertsities">{{ trans('cruds.student.fields.univertsities') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('univertsities') ? 'is-invalid' : '' }}" name="univertsities[]" id="univertsities" multiple>
                    @foreach($univertsities as $id => $univertsity)
                        <option value="{{ $id }}" {{ in_array($id, old('univertsities', [])) ? 'selected' : '' }}>{{ $univertsity }}</option>
                    @endforeach
                </select>
                @if($errors->has('univertsities'))
                    <div class="invalid-feedback">
                        {{ $errors->first('univertsities') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.univertsities_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subjects">{{ trans('cruds.student.fields.subjects') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('subjects') ? 'is-invalid' : '' }}" name="subjects[]" id="subjects" multiple>
                    @foreach($subjects as $id => $subject)
                        <option value="{{ $id }}" {{ in_array($id, old('subjects', [])) ? 'selected' : '' }}>{{ $subject }}</option>
                    @endforeach
                </select>
                @if($errors->has('subjects'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subjects') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.subjects_helper') }}</span>
            </div>
           {{-- <div class="form-group">
                <label for="programs">{{ trans('cruds.student.fields.programs') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('programs') ? 'is-invalid' : '' }}" name="programs[]" id="programs" multiple>
                    @foreach($programs as $id => $program)
                        <option value="{{ $id }}" {{ in_array($id, old('programs', [])) ? 'selected' : '' }}>{{ $program }}</option>
                    @endforeach
                </select>
                @if($errors->has('programs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('programs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.programs_helper') }}</span>
            </div>--}}
            <div class="form-group">
                <label for="course_interesteds">{{ trans('cruds.student.fields.course_interested') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('course_interesteds') ? 'is-invalid' : '' }}" name="course_interesteds[]" id="course_interesteds" multiple>
                    @foreach($course_interesteds as $id => $course_interested)
                        <option value="{{ $id }}" {{ in_array($id, old('course_interesteds', [])) ? 'selected' : '' }}>{{ $course_interested }}</option>
                    @endforeach
                </select>
                @if($errors->has('course_interesteds'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_interesteds') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.course_interested_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="academic_attachments">{{ trans('cruds.student.fields.academic_attachments') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('academic_attachments') ? 'is-invalid' : '' }}" name="academic_attachments[]" id="academic_attachments" multiple>
                    @foreach($academic_attachments as $id => $academic_attachment)
                        <option value="{{ $id }}" {{ in_array($id, old('academic_attachments', [])) ? 'selected' : '' }}>{{ $academic_attachment }}</option>
                    @endforeach
                </select>
                @if($errors->has('academic_attachments'))
                    <div class="invalid-feedback">
                        {{ $errors->first('academic_attachments') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.academic_attachments_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo">{{ trans('cruds.student.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="academic_certificates">{{ trans('cruds.student.fields.academic_certificates') }}</label>
                <div class="needsclick dropzone {{ $errors->has('academic_certificates') ? 'is-invalid' : '' }}" id="academic_certificates-dropzone">
                </div>
                @if($errors->has('academic_certificates'))
                    <div class="invalid-feedback">
                        {{ $errors->first('academic_certificates') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.academic_certificates_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="attachments">{{ trans('cruds.student.fields.attachments') }}</label>
                <div class="needsclick dropzone {{ $errors->has('attachments') ? 'is-invalid' : '' }}" id="attachments-dropzone">
                </div>
                @if($errors->has('attachments'))
                    <div class="invalid-feedback">
                        {{ $errors->first('attachments') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.attachments_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="medical_certificates">{{ trans('cruds.student.fields.medical_certificates') }}</label>
                <div class="needsclick dropzone {{ $errors->has('medical_certificates') ? 'is-invalid' : '' }}" id="medical_certificates-dropzone">
                </div>
                @if($errors->has('medical_certificates'))
                    <div class="invalid-feedback">
                        {{ $errors->first('medical_certificates') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.student.fields.medical_certificates_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.students.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $student->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.students.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($student) && $student->photo)
      var file = {!! json_encode($student->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    var uploadedAcademicCertificatesMap = {}
Dropzone.options.academicCertificatesDropzone = {
    url: '{{ route('admin.students.storeMedia') }}',
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="academic_certificates[]" value="' + response.name + '">')
      uploadedAcademicCertificatesMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedAcademicCertificatesMap[file.name]
      }
      $('form').find('input[name="academic_certificates[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($student) && $student->academic_certificates)
          var files =
            {!! json_encode($student->academic_certificates) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="academic_certificates[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    var uploadedAttachmentsMap = {}
Dropzone.options.attachmentsDropzone = {
    url: '{{ route('admin.students.storeMedia') }}',
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="attachments[]" value="' + response.name + '">')
      uploadedAttachmentsMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedAttachmentsMap[file.name]
      }
      $('form').find('input[name="attachments[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($student) && $student->attachments)
          var files =
            {!! json_encode($student->attachments) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="attachments[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    var uploadedMedicalCertificatesMap = {}
Dropzone.options.medicalCertificatesDropzone = {
    url: '{{ route('admin.students.storeMedia') }}',
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="medical_certificates[]" value="' + response.name + '">')
      uploadedMedicalCertificatesMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedMedicalCertificatesMap[file.name]
      }
      $('form').find('input[name="medical_certificates[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($student) && $student->medical_certificates)
          var files =
            {!! json_encode($student->medical_certificates) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="medical_certificates[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection
