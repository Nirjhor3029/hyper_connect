@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.documentType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.document-types.update", [$documentType->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.documentType.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $documentType->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.documentType.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="category">{{ trans('cruds.documentType.fields.category') }}</label>
                <input class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" type="text" name="category" id="category" value="{{ old('category', $documentType->category) }}">
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.documentType.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="required_for_levels">{{ trans('cruds.documentType.fields.required_for_levels') }}</label>
                <textarea class="form-control {{ $errors->has('required_for_levels') ? 'is-invalid' : '' }}" name="required_for_levels" id="required_for_levels">{{ old('required_for_levels', $documentType->required_for_levels) }}</textarea>
                @if($errors->has('required_for_levels'))
                    <div class="invalid-feedback">
                        {{ $errors->first('required_for_levels') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.documentType.fields.required_for_levels_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_translatable') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_translatable" value="0">
                    <input class="form-check-input" type="checkbox" name="is_translatable" id="is_translatable" value="1" {{ $documentType->is_translatable || old('is_translatable', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_translatable">{{ trans('cruds.documentType.fields.is_translatable') }}</label>
                </div>
                @if($errors->has('is_translatable'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_translatable') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.documentType.fields.is_translatable_helper') }}</span>
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