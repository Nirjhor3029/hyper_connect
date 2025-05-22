@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.universityPartnership.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.university-partnerships.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="university_id">{{ trans('cruds.universityPartnership.fields.university') }}</label>
                <select class="form-control select2 {{ $errors->has('university') ? 'is-invalid' : '' }}" name="university_id" id="university_id">
                    @foreach($universities as $id => $entry)
                        <option value="{{ $id }}" {{ old('university_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('university'))
                    <div class="invalid-feedback">
                        {{ $errors->first('university') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.university_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="partner_name">{{ trans('cruds.universityPartnership.fields.partner_name') }}</label>
                <input class="form-control {{ $errors->has('partner_name') ? 'is-invalid' : '' }}" type="text" name="partner_name" id="partner_name" value="{{ old('partner_name', '') }}">
                @if($errors->has('partner_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('partner_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.partner_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="partner_type">{{ trans('cruds.universityPartnership.fields.partner_type') }}</label>
                <input class="form-control {{ $errors->has('partner_type') ? 'is-invalid' : '' }}" type="text" name="partner_type" id="partner_type" value="{{ old('partner_type', '') }}">
                @if($errors->has('partner_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('partner_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.partner_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="agreement_url">{{ trans('cruds.universityPartnership.fields.agreement_url') }}</label>
                <input class="form-control {{ $errors->has('agreement_url') ? 'is-invalid' : '' }}" type="text" name="agreement_url" id="agreement_url" value="{{ old('agreement_url', '') }}">
                @if($errors->has('agreement_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agreement_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.agreement_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="active_from">{{ trans('cruds.universityPartnership.fields.active_from') }}</label>
                <input class="form-control date {{ $errors->has('active_from') ? 'is-invalid' : '' }}" type="text" name="active_from" id="active_from" value="{{ old('active_from') }}">
                @if($errors->has('active_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('active_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.active_from_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="active_to">{{ trans('cruds.universityPartnership.fields.active_to') }}</label>
                <input class="form-control date {{ $errors->has('active_to') ? 'is-invalid' : '' }}" type="text" name="active_to" id="active_to" value="{{ old('active_to') }}">
                @if($errors->has('active_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('active_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.active_to_helper') }}</span>
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