@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.offerLetter.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.offer-letters.update", [$offerLetter->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="application_id">{{ trans('cruds.offerLetter.fields.application') }}</label>
                <select class="form-control select2 {{ $errors->has('application') ? 'is-invalid' : '' }}" name="application_id" id="application_id">
                    @foreach($applications as $id => $entry)
                        <option value="{{ $id }}" {{ (old('application_id') ? old('application_id') : $offerLetter->application->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('application'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.offerLetter.fields.application_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="file_url">{{ trans('cruds.offerLetter.fields.file_url') }}</label>
                <input class="form-control {{ $errors->has('file_url') ? 'is-invalid' : '' }}" type="text" name="file_url" id="file_url" value="{{ old('file_url', $offerLetter->file_url) }}">
                @if($errors->has('file_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.offerLetter.fields.file_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="issue_date">{{ trans('cruds.offerLetter.fields.issue_date') }}</label>
                <input class="form-control datetime {{ $errors->has('issue_date') ? 'is-invalid' : '' }}" type="text" name="issue_date" id="issue_date" value="{{ old('issue_date', $offerLetter->issue_date) }}">
                @if($errors->has('issue_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('issue_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.offerLetter.fields.issue_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="issued_by_id">{{ trans('cruds.offerLetter.fields.issued_by') }}</label>
                <select class="form-control select2 {{ $errors->has('issued_by') ? 'is-invalid' : '' }}" name="issued_by_id" id="issued_by_id">
                    @foreach($issued_bies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('issued_by_id') ? old('issued_by_id') : $offerLetter->issued_by->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('issued_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('issued_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.offerLetter.fields.issued_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="delivery_status">{{ trans('cruds.offerLetter.fields.delivery_status') }}</label>
                <input class="form-control {{ $errors->has('delivery_status') ? 'is-invalid' : '' }}" type="text" name="delivery_status" id="delivery_status" value="{{ old('delivery_status', $offerLetter->delivery_status) }}">
                @if($errors->has('delivery_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('delivery_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.offerLetter.fields.delivery_status_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('visible_to_student') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="visible_to_student" value="0">
                    <input class="form-check-input" type="checkbox" name="visible_to_student" id="visible_to_student" value="1" {{ $offerLetter->visible_to_student || old('visible_to_student', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="visible_to_student">{{ trans('cruds.offerLetter.fields.visible_to_student') }}</label>
                </div>
                @if($errors->has('visible_to_student'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visible_to_student') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.offerLetter.fields.visible_to_student_helper') }}</span>
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