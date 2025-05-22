@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.commissionDistribution.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.commission-distributions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="student_id">{{ trans('cruds.commissionDistribution.fields.student') }}</label>
                <select class="form-control select2 {{ $errors->has('student') ? 'is-invalid' : '' }}" name="student_id" id="student_id">
                    @foreach($students as $id => $entry)
                        <option value="{{ $id }}" {{ old('student_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('student'))
                    <div class="invalid-feedback">
                        {{ $errors->first('student') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionDistribution.fields.student_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commission_settings_id">{{ trans('cruds.commissionDistribution.fields.commission_settings') }}</label>
                <select class="form-control select2 {{ $errors->has('commission_settings') ? 'is-invalid' : '' }}" name="commission_settings_id" id="commission_settings_id">
                    @foreach($commission_settings as $id => $entry)
                        <option value="{{ $id }}" {{ old('commission_settings_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('commission_settings'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission_settings') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionDistribution.fields.commission_settings_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_commission_paid') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_commission_paid" value="0">
                    <input class="form-check-input" type="checkbox" name="is_commission_paid" id="is_commission_paid" value="1" {{ old('is_commission_paid', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_commission_paid">{{ trans('cruds.commissionDistribution.fields.is_commission_paid') }}</label>
                </div>
                @if($errors->has('is_commission_paid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_commission_paid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionDistribution.fields.is_commission_paid_helper') }}</span>
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