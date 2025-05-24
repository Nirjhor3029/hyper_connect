@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.nationality.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.nationalities.update", [$nationality->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="num_code">{{ trans('cruds.nationality.fields.num_code') }}</label>
                <input class="form-control {{ $errors->has('num_code') ? 'is-invalid' : '' }}" type="number" name="num_code" id="num_code" value="{{ old('num_code', $nationality->num_code) }}" step="1">
                @if($errors->has('num_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('num_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.nationality.fields.num_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="alpha_2_code">{{ trans('cruds.nationality.fields.alpha_2_code') }}</label>
                <input class="form-control {{ $errors->has('alpha_2_code') ? 'is-invalid' : '' }}" type="text" name="alpha_2_code" id="alpha_2_code" value="{{ old('alpha_2_code', $nationality->alpha_2_code) }}">
                @if($errors->has('alpha_2_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alpha_2_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.nationality.fields.alpha_2_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="alpha_3_code">{{ trans('cruds.nationality.fields.alpha_3_code') }}</label>
                <input class="form-control {{ $errors->has('alpha_3_code') ? 'is-invalid' : '' }}" type="text" name="alpha_3_code" id="alpha_3_code" value="{{ old('alpha_3_code', $nationality->alpha_3_code) }}">
                @if($errors->has('alpha_3_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alpha_3_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.nationality.fields.alpha_3_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.nationality.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $nationality->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.nationality.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality_en">{{ trans('cruds.nationality.fields.nationality_en') }}</label>
                <input class="form-control {{ $errors->has('nationality_en') ? 'is-invalid' : '' }}" type="text" name="nationality_en" id="nationality_en" value="{{ old('nationality_en', $nationality->nationality_en) }}">
                @if($errors->has('nationality_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.nationality.fields.nationality_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality_bn">{{ trans('cruds.nationality.fields.nationality_bn') }}</label>
                <input class="form-control {{ $errors->has('nationality_bn') ? 'is-invalid' : '' }}" type="text" name="nationality_bn" id="nationality_bn" value="{{ old('nationality_bn', $nationality->nationality_bn) }}">
                @if($errors->has('nationality_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nationality_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.nationality.fields.nationality_bn_helper') }}</span>
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