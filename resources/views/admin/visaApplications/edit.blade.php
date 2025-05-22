@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.visaApplication.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.visa-applications.update", [$visaApplication->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="application_id">{{ trans('cruds.visaApplication.fields.application') }}</label>
                <select class="form-control select2 {{ $errors->has('application') ? 'is-invalid' : '' }}" name="application_id" id="application_id">
                    @foreach($applications as $id => $entry)
                        <option value="{{ $id }}" {{ (old('application_id') ? old('application_id') : $visaApplication->application->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('application'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.visaApplication.fields.application_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visa_type">{{ trans('cruds.visaApplication.fields.visa_type') }}</label>
                <input class="form-control {{ $errors->has('visa_type') ? 'is-invalid' : '' }}" type="text" name="visa_type" id="visa_type" value="{{ old('visa_type', $visaApplication->visa_type) }}">
                @if($errors->has('visa_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visa_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.visaApplication.fields.visa_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="current_stage">{{ trans('cruds.visaApplication.fields.current_stage') }}</label>
                <input class="form-control {{ $errors->has('current_stage') ? 'is-invalid' : '' }}" type="text" name="current_stage" id="current_stage" value="{{ old('current_stage', $visaApplication->current_stage) }}">
                @if($errors->has('current_stage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_stage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.visaApplication.fields.current_stage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status">{{ trans('cruds.visaApplication.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $visaApplication->status) }}">
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.visaApplication.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="submitted_at">{{ trans('cruds.visaApplication.fields.submitted_at') }}</label>
                <input class="form-control datetime {{ $errors->has('submitted_at') ? 'is-invalid' : '' }}" type="text" name="submitted_at" id="submitted_at" value="{{ old('submitted_at', $visaApplication->submitted_at) }}">
                @if($errors->has('submitted_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('submitted_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.visaApplication.fields.submitted_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="approved_at">{{ trans('cruds.visaApplication.fields.approved_at') }}</label>
                <input class="form-control datetime {{ $errors->has('approved_at') ? 'is-invalid' : '' }}" type="text" name="approved_at" id="approved_at" value="{{ old('approved_at', $visaApplication->approved_at) }}">
                @if($errors->has('approved_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('approved_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.visaApplication.fields.approved_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="issued_at">{{ trans('cruds.visaApplication.fields.issued_at') }}</label>
                <input class="form-control datetime {{ $errors->has('issued_at') ? 'is-invalid' : '' }}" type="text" name="issued_at" id="issued_at" value="{{ old('issued_at', $visaApplication->issued_at) }}">
                @if($errors->has('issued_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('issued_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.visaApplication.fields.issued_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="expires_at">{{ trans('cruds.visaApplication.fields.expires_at') }}</label>
                <input class="form-control datetime {{ $errors->has('expires_at') ? 'is-invalid' : '' }}" type="text" name="expires_at" id="expires_at" value="{{ old('expires_at', $visaApplication->expires_at) }}">
                @if($errors->has('expires_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expires_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.visaApplication.fields.expires_at_helper') }}</span>
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