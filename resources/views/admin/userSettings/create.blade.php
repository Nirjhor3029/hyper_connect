@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.userSetting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.user-settings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.userSetting.fields.user') }}</label>
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
                <span class="help-block">{{ trans('cruds.userSetting.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="preferences">{{ trans('cruds.userSetting.fields.preferences') }}</label>
                <textarea class="form-control {{ $errors->has('preferences') ? 'is-invalid' : '' }}" name="preferences" id="preferences">{{ old('preferences') }}</textarea>
                @if($errors->has('preferences'))
                    <div class="invalid-feedback">
                        {{ $errors->first('preferences') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.userSetting.fields.preferences_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="language">{{ trans('cruds.userSetting.fields.language') }}</label>
                <input class="form-control {{ $errors->has('language') ? 'is-invalid' : '' }}" type="text" name="language" id="language" value="{{ old('language', '') }}">
                @if($errors->has('language'))
                    <div class="invalid-feedback">
                        {{ $errors->first('language') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.userSetting.fields.language_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="theme_mode">{{ trans('cruds.userSetting.fields.theme_mode') }}</label>
                <input class="form-control {{ $errors->has('theme_mode') ? 'is-invalid' : '' }}" type="text" name="theme_mode" id="theme_mode" value="{{ old('theme_mode', '') }}">
                @if($errors->has('theme_mode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('theme_mode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.userSetting.fields.theme_mode_helper') }}</span>
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