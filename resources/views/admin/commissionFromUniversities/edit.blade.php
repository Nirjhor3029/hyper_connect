@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.commissionFromUniversity.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.commission-from-universities.update", [$commissionFromUniversity->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="university_id">{{ trans('cruds.commissionFromUniversity.fields.university') }}</label>
                <select class="form-control select2 {{ $errors->has('university') ? 'is-invalid' : '' }}" name="university_id" id="university_id">
                    @foreach($universities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('university_id') ? old('university_id') : $commissionFromUniversity->university->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('university'))
                    <div class="invalid-feedback">
                        {{ $errors->first('university') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionFromUniversity.fields.university_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_id">{{ trans('cruds.commissionFromUniversity.fields.course') }}</label>
                <select class="form-control select2 {{ $errors->has('course') ? 'is-invalid' : '' }}" name="course_id" id="course_id">
                    @foreach($courses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('course_id') ? old('course_id') : $commissionFromUniversity->course->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('course'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionFromUniversity.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comission">{{ trans('cruds.commissionFromUniversity.fields.comission') }}</label>
                <input class="form-control {{ $errors->has('comission') ? 'is-invalid' : '' }}" type="number" name="comission" id="comission" value="{{ old('comission', $commissionFromUniversity->comission) }}" step="0.01">
                @if($errors->has('comission'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comission') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commissionFromUniversity.fields.comission_helper') }}</span>
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