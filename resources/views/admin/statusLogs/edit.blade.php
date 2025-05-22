@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.statusLog.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.status-logs.update", [$statusLog->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="related_type">{{ trans('cruds.statusLog.fields.related_type') }}</label>
                <input class="form-control {{ $errors->has('related_type') ? 'is-invalid' : '' }}" type="text" name="related_type" id="related_type" value="{{ old('related_type', $statusLog->related_type) }}">
                @if($errors->has('related_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('related_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusLog.fields.related_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="related">{{ trans('cruds.statusLog.fields.related') }}</label>
                <input class="form-control {{ $errors->has('related') ? 'is-invalid' : '' }}" type="number" name="related" id="related" value="{{ old('related', $statusLog->related) }}" step="1">
                @if($errors->has('related'))
                    <div class="invalid-feedback">
                        {{ $errors->first('related') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusLog.fields.related_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status_from_id">{{ trans('cruds.statusLog.fields.status_from') }}</label>
                <select class="form-control select2 {{ $errors->has('status_from') ? 'is-invalid' : '' }}" name="status_from_id" id="status_from_id">
                    @foreach($status_froms as $id => $entry)
                        <option value="{{ $id }}" {{ (old('status_from_id') ? old('status_from_id') : $statusLog->status_from->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('status_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusLog.fields.status_from_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status_to_id">{{ trans('cruds.statusLog.fields.status_to') }}</label>
                <select class="form-control select2 {{ $errors->has('status_to') ? 'is-invalid' : '' }}" name="status_to_id" id="status_to_id">
                    @foreach($status_tos as $id => $entry)
                        <option value="{{ $id }}" {{ (old('status_to_id') ? old('status_to_id') : $statusLog->status_to->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('status_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusLog.fields.status_to_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="changed_by_id">{{ trans('cruds.statusLog.fields.changed_by') }}</label>
                <select class="form-control select2 {{ $errors->has('changed_by') ? 'is-invalid' : '' }}" name="changed_by_id" id="changed_by_id">
                    @foreach($changed_bies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('changed_by_id') ? old('changed_by_id') : $statusLog->changed_by->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('changed_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('changed_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusLog.fields.changed_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="remarks">{{ trans('cruds.statusLog.fields.remarks') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('remarks') ? 'is-invalid' : '' }}" name="remarks" id="remarks">{!! old('remarks', $statusLog->remarks) !!}</textarea>
                @if($errors->has('remarks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remarks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusLog.fields.remarks_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.status-logs.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $statusLog->id ?? 0 }}');
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