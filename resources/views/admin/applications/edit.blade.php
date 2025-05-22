@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.application.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.applications.update", [$application->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="student_id">{{ trans('cruds.application.fields.student') }}</label>
                <select class="form-control select2 {{ $errors->has('student') ? 'is-invalid' : '' }}" name="student_id" id="student_id">
                    @foreach($students as $id => $entry)
                        <option value="{{ $id }}" {{ (old('student_id') ? old('student_id') : $application->student->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('student'))
                    <div class="invalid-feedback">
                        {{ $errors->first('student') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.student_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="university_id">{{ trans('cruds.application.fields.university') }}</label>
                <select class="form-control select2 {{ $errors->has('university') ? 'is-invalid' : '' }}" name="university_id" id="university_id">
                    @foreach($universities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('university_id') ? old('university_id') : $application->university->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('university'))
                    <div class="invalid-feedback">
                        {{ $errors->first('university') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.university_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="program_id">{{ trans('cruds.application.fields.program') }}</label>
                <select class="form-control select2 {{ $errors->has('program') ? 'is-invalid' : '' }}" name="program_id" id="program_id">
                    @foreach($programs as $id => $entry)
                        <option value="{{ $id }}" {{ (old('program_id') ? old('program_id') : $application->program->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('program'))
                    <div class="invalid-feedback">
                        {{ $errors->first('program') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.program_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="agent_id">{{ trans('cruds.application.fields.agent') }}</label>
                <select class="form-control select2 {{ $errors->has('agent') ? 'is-invalid' : '' }}" name="agent_id" id="agent_id">
                    @foreach($agents as $id => $entry)
                        <option value="{{ $id }}" {{ (old('agent_id') ? old('agent_id') : $application->agent->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('agent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.agent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sub_agent_id">{{ trans('cruds.application.fields.sub_agent') }}</label>
                <select class="form-control select2 {{ $errors->has('sub_agent') ? 'is-invalid' : '' }}" name="sub_agent_id" id="sub_agent_id">
                    @foreach($sub_agents as $id => $entry)
                        <option value="{{ $id }}" {{ (old('sub_agent_id') ? old('sub_agent_id') : $application->sub_agent->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('sub_agent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sub_agent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.sub_agent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="intake_term">{{ trans('cruds.application.fields.intake_term') }}</label>
                <input class="form-control {{ $errors->has('intake_term') ? 'is-invalid' : '' }}" type="text" name="intake_term" id="intake_term" value="{{ old('intake_term', $application->intake_term) }}">
                @if($errors->has('intake_term'))
                    <div class="invalid-feedback">
                        {{ $errors->first('intake_term') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.intake_term_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="intake_year">{{ trans('cruds.application.fields.intake_year') }}</label>
                <input class="form-control {{ $errors->has('intake_year') ? 'is-invalid' : '' }}" type="number" name="intake_year" id="intake_year" value="{{ old('intake_year', $application->intake_year) }}" step="1">
                @if($errors->has('intake_year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('intake_year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.intake_year_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status">{{ trans('cruds.application.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $application->status) }}">
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_fast_track') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_fast_track" value="0">
                    <input class="form-check-input" type="checkbox" name="is_fast_track" id="is_fast_track" value="1" {{ $application->is_fast_track || old('is_fast_track', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_fast_track">{{ trans('cruds.application.fields.is_fast_track') }}</label>
                </div>
                @if($errors->has('is_fast_track'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_fast_track') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.is_fast_track_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('needs_interview') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="needs_interview" value="0">
                    <input class="form-check-input" type="checkbox" name="needs_interview" id="needs_interview" value="1" {{ $application->needs_interview || old('needs_interview', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="needs_interview">{{ trans('cruds.application.fields.needs_interview') }}</label>
                </div>
                @if($errors->has('needs_interview'))
                    <div class="invalid-feedback">
                        {{ $errors->first('needs_interview') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.needs_interview_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="interview_date">{{ trans('cruds.application.fields.interview_date') }}</label>
                <input class="form-control datetime {{ $errors->has('interview_date') ? 'is-invalid' : '' }}" type="text" name="interview_date" id="interview_date" value="{{ old('interview_date', $application->interview_date) }}">
                @if($errors->has('interview_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('interview_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.interview_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.application.fields.notes') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{!! old('notes', $application->notes) !!}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="submitted_at">{{ trans('cruds.application.fields.submitted_at') }}</label>
                <input class="form-control datetime {{ $errors->has('submitted_at') ? 'is-invalid' : '' }}" type="text" name="submitted_at" id="submitted_at" value="{{ old('submitted_at', $application->submitted_at) }}">
                @if($errors->has('submitted_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('submitted_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.submitted_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="decision_at">{{ trans('cruds.application.fields.decision_at') }}</label>
                <input class="form-control datetime {{ $errors->has('decision_at') ? 'is-invalid' : '' }}" type="text" name="decision_at" id="decision_at" value="{{ old('decision_at', $application->decision_at) }}">
                @if($errors->has('decision_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('decision_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.decision_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="finalized_at">{{ trans('cruds.application.fields.finalized_at') }}</label>
                <input class="form-control datetime {{ $errors->has('finalized_at') ? 'is-invalid' : '' }}" type="text" name="finalized_at" id="finalized_at" value="{{ old('finalized_at', $application->finalized_at) }}">
                @if($errors->has('finalized_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('finalized_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.finalized_at_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.applications.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $application->id ?? 0 }}');
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