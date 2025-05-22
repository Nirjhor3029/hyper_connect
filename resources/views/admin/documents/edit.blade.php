@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.document.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.documents.update", [$document->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="application_id">{{ trans('cruds.document.fields.application') }}</label>
                <select class="form-control select2 {{ $errors->has('application') ? 'is-invalid' : '' }}" name="application_id" id="application_id">
                    @foreach($applications as $id => $entry)
                        <option value="{{ $id }}" {{ (old('application_id') ? old('application_id') : $document->application->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('application'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.application_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="document_type_id">{{ trans('cruds.document.fields.document_type') }}</label>
                <select class="form-control select2 {{ $errors->has('document_type') ? 'is-invalid' : '' }}" name="document_type_id" id="document_type_id">
                    @foreach($document_types as $id => $entry)
                        <option value="{{ $id }}" {{ (old('document_type_id') ? old('document_type_id') : $document->document_type->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('document_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('document_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.document_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="file_url">{{ trans('cruds.document.fields.file_url') }}</label>
                <input class="form-control {{ $errors->has('file_url') ? 'is-invalid' : '' }}" type="text" name="file_url" id="file_url" value="{{ old('file_url', $document->file_url) }}">
                @if($errors->has('file_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.file_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status">{{ trans('cruds.document.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $document->status) }}">
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="expiry_date">{{ trans('cruds.document.fields.expiry_date') }}</label>
                <input class="form-control date {{ $errors->has('expiry_date') ? 'is-invalid' : '' }}" type="text" name="expiry_date" id="expiry_date" value="{{ old('expiry_date', $document->expiry_date) }}">
                @if($errors->has('expiry_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expiry_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.expiry_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="translation_status">{{ trans('cruds.document.fields.translation_status') }}</label>
                <input class="form-control {{ $errors->has('translation_status') ? 'is-invalid' : '' }}" type="text" name="translation_status" id="translation_status" value="{{ old('translation_status', $document->translation_status) }}">
                @if($errors->has('translation_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('translation_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.translation_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="verified_by_id">{{ trans('cruds.document.fields.verified_by') }}</label>
                <select class="form-control select2 {{ $errors->has('verified_by') ? 'is-invalid' : '' }}" name="verified_by_id" id="verified_by_id">
                    @foreach($verified_bies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('verified_by_id') ? old('verified_by_id') : $document->verified_by->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('verified_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('verified_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.verified_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="verified_at">{{ trans('cruds.document.fields.verified_at') }}</label>
                <input class="form-control datetime {{ $errors->has('verified_at') ? 'is-invalid' : '' }}" type="text" name="verified_at" id="verified_at" value="{{ old('verified_at', $document->verified_at) }}">
                @if($errors->has('verified_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('verified_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.verified_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="remarks">{{ trans('cruds.document.fields.remarks') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('remarks') ? 'is-invalid' : '' }}" name="remarks" id="remarks">{!! old('remarks', $document->remarks) !!}</textarea>
                @if($errors->has('remarks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remarks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.remarks_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.documents.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $document->id ?? 0 }}');
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