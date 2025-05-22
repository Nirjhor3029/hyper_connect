@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.program.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.programs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="university_id">{{ trans('cruds.program.fields.university') }}</label>
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
                <span class="help-block">{{ trans('cruds.program.fields.university_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.program.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="short_code">{{ trans('cruds.program.fields.short_code') }}</label>
                <input class="form-control {{ $errors->has('short_code') ? 'is-invalid' : '' }}" type="text" name="short_code" id="short_code" value="{{ old('short_code', '') }}">
                @if($errors->has('short_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('short_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.short_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="field_of_study">{{ trans('cruds.program.fields.field_of_study') }}</label>
                <input class="form-control {{ $errors->has('field_of_study') ? 'is-invalid' : '' }}" type="text" name="field_of_study" id="field_of_study" value="{{ old('field_of_study', '') }}">
                @if($errors->has('field_of_study'))
                    <div class="invalid-feedback">
                        {{ $errors->first('field_of_study') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.field_of_study_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="education_type">{{ trans('cruds.program.fields.education_type') }}</label>
                <input class="form-control {{ $errors->has('education_type') ? 'is-invalid' : '' }}" type="text" name="education_type" id="education_type" value="{{ old('education_type', '') }}">
                @if($errors->has('education_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('education_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.education_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="level">{{ trans('cruds.program.fields.level') }}</label>
                <input class="form-control {{ $errors->has('level') ? 'is-invalid' : '' }}" type="text" name="level" id="level" value="{{ old('level', '') }}">
                @if($errors->has('level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.level_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_months">{{ trans('cruds.program.fields.duration_months') }}</label>
                <input class="form-control {{ $errors->has('duration_months') ? 'is-invalid' : '' }}" type="text" name="duration_months" id="duration_months" value="{{ old('duration_months', '') }}">
                @if($errors->has('duration_months'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration_months') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.duration_months_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="credit_hours">{{ trans('cruds.program.fields.credit_hours') }}</label>
                <input class="form-control {{ $errors->has('credit_hours') ? 'is-invalid' : '' }}" type="number" name="credit_hours" id="credit_hours" value="{{ old('credit_hours', '') }}" step="1">
                @if($errors->has('credit_hours'))
                    <div class="invalid-feedback">
                        {{ $errors->first('credit_hours') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.credit_hours_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fees">{{ trans('cruds.program.fields.fees') }}</label>
                <input class="form-control {{ $errors->has('fees') ? 'is-invalid' : '' }}" type="number" name="fees" id="fees" value="{{ old('fees', '') }}" step="0.01">
                @if($errors->has('fees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.fees_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fee_breakdown">{{ trans('cruds.program.fields.fee_breakdown') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('fee_breakdown') ? 'is-invalid' : '' }}" name="fee_breakdown" id="fee_breakdown">{!! old('fee_breakdown') !!}</textarea>
                @if($errors->has('fee_breakdown'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fee_breakdown') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.fee_breakdown_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="teaching_language">{{ trans('cruds.program.fields.teaching_language') }}</label>
                <input class="form-control {{ $errors->has('teaching_language') ? 'is-invalid' : '' }}" type="text" name="teaching_language" id="teaching_language" value="{{ old('teaching_language', '') }}">
                @if($errors->has('teaching_language'))
                    <div class="invalid-feedback">
                        {{ $errors->first('teaching_language') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.teaching_language_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="semester_intake_months">{{ trans('cruds.program.fields.semester_intake_months') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('semester_intake_months') ? 'is-invalid' : '' }}" name="semester_intake_months" id="semester_intake_months">{!! old('semester_intake_months') !!}</textarea>
                @if($errors->has('semester_intake_months'))
                    <div class="invalid-feedback">
                        {{ $errors->first('semester_intake_months') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.semester_intake_months_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="requirements">{{ trans('cruds.program.fields.requirements') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('requirements') ? 'is-invalid' : '' }}" name="requirements" id="requirements">{!! old('requirements') !!}</textarea>
                @if($errors->has('requirements'))
                    <div class="invalid-feedback">
                        {{ $errors->first('requirements') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.requirements_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', 0) == 1 || old('is_active') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('cruds.program.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tags">{{ trans('cruds.program.fields.tag') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('tags') ? 'is-invalid' : '' }}" name="tags[]" id="tags" multiple>
                    @foreach($tags as $id => $tag)
                        <option value="{{ $id }}" {{ in_array($id, old('tags', [])) ? 'selected' : '' }}>{{ $tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('tags'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tags') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.program.fields.tag_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.programs.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $program->id ?? 0 }}');
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

@endsection