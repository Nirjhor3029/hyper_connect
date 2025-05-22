@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.subject.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.subjects.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="university_id">{{ trans('cruds.subject.fields.university') }}</label>
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
                <span class="help-block">{{ trans('cruds.subject.fields.university_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_id">{{ trans('cruds.subject.fields.course') }}</label>
                <select class="form-control select2 {{ $errors->has('course') ? 'is-invalid' : '' }}" name="course_id" id="course_id">
                    @foreach($courses as $id => $entry)
                        <option value="{{ $id }}" {{ old('course_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('course'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subject_name">{{ trans('cruds.subject.fields.subject_name') }}</label>
                <input class="form-control {{ $errors->has('subject_name') ? 'is-invalid' : '' }}" type="text" name="subject_name" id="subject_name" value="{{ old('subject_name', '') }}">
                @if($errors->has('subject_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subject_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.subject_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subject_details">{{ trans('cruds.subject.fields.subject_details') }}</label>
                <input class="form-control {{ $errors->has('subject_details') ? 'is-invalid' : '' }}" type="text" name="subject_details" id="subject_details" value="{{ old('subject_details', '') }}">
                @if($errors->has('subject_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subject_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.subject_details_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration">{{ trans('cruds.subject.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text" name="duration" id="duration" value="{{ old('duration', '') }}">
                @if($errors->has('duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.duration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course_fee">{{ trans('cruds.subject.fields.course_fee') }}</label>
                <input class="form-control {{ $errors->has('course_fee') ? 'is-invalid' : '' }}" type="number" name="course_fee" id="course_fee" value="{{ old('course_fee', '') }}" step="0.01">
                @if($errors->has('course_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.course_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="required_fee">{{ trans('cruds.subject.fields.required_fee') }}</label>
                <input class="form-control {{ $errors->has('required_fee') ? 'is-invalid' : '' }}" type="number" name="required_fee" id="required_fee" value="{{ old('required_fee', '') }}" step="0.01">
                @if($errors->has('required_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('required_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.required_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_fees">{{ trans('cruds.subject.fields.other_fees') }}</label>
                <input class="form-control {{ $errors->has('other_fees') ? 'is-invalid' : '' }}" type="number" name="other_fees" id="other_fees" value="{{ old('other_fees', '') }}" step="0.01">
                @if($errors->has('other_fees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('other_fees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.other_fees_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="eligibility_criterias">{{ trans('cruds.subject.fields.eligibility_criterias') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('eligibility_criterias') ? 'is-invalid' : '' }}" name="eligibility_criterias" id="eligibility_criterias">{!! old('eligibility_criterias') !!}</textarea>
                @if($errors->has('eligibility_criterias'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eligibility_criterias') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.eligibility_criterias_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('english_requirements') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="english_requirements" value="0">
                    <input class="form-check-input" type="checkbox" name="english_requirements" id="english_requirements" value="1" {{ old('english_requirements', 0) == 1 || old('english_requirements') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="english_requirements">{{ trans('cruds.subject.fields.english_requirements') }}</label>
                </div>
                @if($errors->has('english_requirements'))
                    <div class="invalid-feedback">
                        {{ $errors->first('english_requirements') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.english_requirements_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('waiver_program') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="waiver_program" value="0">
                    <input class="form-check-input" type="checkbox" name="waiver_program" id="waiver_program" value="1" {{ old('waiver_program', 0) == 1 || old('waiver_program') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="waiver_program">{{ trans('cruds.subject.fields.waiver_program') }}</label>
                </div>
                @if($errors->has('waiver_program'))
                    <div class="invalid-feedback">
                        {{ $errors->first('waiver_program') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.waiver_program_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="waiver_amount">{{ trans('cruds.subject.fields.waiver_amount') }}</label>
                <input class="form-control {{ $errors->has('waiver_amount') ? 'is-invalid' : '' }}" type="number" name="waiver_amount" id="waiver_amount" value="{{ old('waiver_amount', '') }}" step="0.01">
                @if($errors->has('waiver_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('waiver_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.waiver_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="waiver_criterias">{{ trans('cruds.subject.fields.waiver_criterias') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('waiver_criterias') ? 'is-invalid' : '' }}" name="waiver_criterias" id="waiver_criterias">{!! old('waiver_criterias') !!}</textarea>
                @if($errors->has('waiver_criterias'))
                    <div class="invalid-feedback">
                        {{ $errors->first('waiver_criterias') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.waiver_criterias_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subject_prerequisits">{{ trans('cruds.subject.fields.subject_prerequisits') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('subject_prerequisits') ? 'is-invalid' : '' }}" name="subject_prerequisits" id="subject_prerequisits">{!! old('subject_prerequisits') !!}</textarea>
                @if($errors->has('subject_prerequisits'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subject_prerequisits') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.subject_prerequisits_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commission">{{ trans('cruds.subject.fields.commission') }}</label>
                <input class="form-control {{ $errors->has('commission') ? 'is-invalid' : '' }}" type="number" name="commission" id="commission" value="{{ old('commission', '') }}" step="0.01">
                @if($errors->has('commission'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.commission_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tags">{{ trans('cruds.subject.fields.tags') }}</label>
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
                <span class="help-block">{{ trans('cruds.subject.fields.tags_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.subjects.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $subject->id ?? 0 }}');
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