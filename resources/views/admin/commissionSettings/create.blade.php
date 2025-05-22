@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.commissionSetting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.commission-settings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="agent_id">{{ trans('cruds.commissionSetting.fields.agent') }}</label>
                <select class="form-control select2 {{ $errors->has('agent') ? 'is-invalid' : '' }}" name="agent_id" id="agent_id">
                    @foreach($agents as $id => $entry)
                        <option value="{{ $id }}" {{ old('agent_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('agent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionSetting.fields.agent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="university_id">{{ trans('cruds.commissionSetting.fields.university') }}</label>
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
                <span class="help-block">{{ trans('cruds.commissionSetting.fields.university_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="curse_id">{{ trans('cruds.commissionSetting.fields.curse') }}</label>
                <select class="form-control select2 {{ $errors->has('curse') ? 'is-invalid' : '' }}" name="curse_id" id="curse_id">
                    @foreach($curses as $id => $entry)
                        <option value="{{ $id }}" {{ old('curse_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('curse'))
                    <div class="invalid-feedback">
                        {{ $errors->first('curse') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionSetting.fields.curse_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comission_commited">{{ trans('cruds.commissionSetting.fields.comission_commited') }}</label>
                <input class="form-control {{ $errors->has('comission_commited') ? 'is-invalid' : '' }}" type="text" name="comission_commited" id="comission_commited" value="{{ old('comission_commited', '') }}">
                @if($errors->has('comission_commited'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comission_commited') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionSetting.fields.comission_commited_helper') }}</span>
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