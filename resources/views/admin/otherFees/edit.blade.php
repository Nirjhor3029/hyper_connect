@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.otherFee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.other-fees.update", [$otherFee->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="country_id">{{ trans('cruds.otherFee.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $otherFee->country->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="service_fee">{{ trans('cruds.otherFee.fields.service_fee') }}</label>
                <input class="form-control {{ $errors->has('service_fee') ? 'is-invalid' : '' }}" type="number" name="service_fee" id="service_fee" value="{{ old('service_fee', $otherFee->service_fee) }}" step="0.01" required>
                @if($errors->has('service_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('service_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.service_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="admission_fee">{{ trans('cruds.otherFee.fields.admission_fee') }}</label>
                <input class="form-control {{ $errors->has('admission_fee') ? 'is-invalid' : '' }}" type="number" name="admission_fee" id="admission_fee" value="{{ old('admission_fee', $otherFee->admission_fee) }}" step="1">
                @if($errors->has('admission_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('admission_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.admission_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="visa_fee">{{ trans('cruds.otherFee.fields.visa_fee') }}</label>
                <input class="form-control {{ $errors->has('visa_fee') ? 'is-invalid' : '' }}" type="number" name="visa_fee" id="visa_fee" value="{{ old('visa_fee', $otherFee->visa_fee) }}" step="1">
                @if($errors->has('visa_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visa_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.visa_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emgs_fee">{{ trans('cruds.otherFee.fields.emgs_fee') }}</label>
                <input class="form-control {{ $errors->has('emgs_fee') ? 'is-invalid' : '' }}" type="number" name="emgs_fee" id="emgs_fee" value="{{ old('emgs_fee', $otherFee->emgs_fee) }}" step="1">
                @if($errors->has('emgs_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emgs_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.emgs_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="registration_fee">{{ trans('cruds.otherFee.fields.registration_fee') }}</label>
                <input class="form-control {{ $errors->has('registration_fee') ? 'is-invalid' : '' }}" type="number" name="registration_fee" id="registration_fee" value="{{ old('registration_fee', $otherFee->registration_fee) }}" step="1">
                @if($errors->has('registration_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('registration_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.registration_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="resource_fee">{{ trans('cruds.otherFee.fields.resource_fee') }}</label>
                <input class="form-control {{ $errors->has('resource_fee') ? 'is-invalid' : '' }}" type="number" name="resource_fee" id="resource_fee" value="{{ old('resource_fee', $otherFee->resource_fee) }}" step="1">
                @if($errors->has('resource_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resource_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.resource_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="caution_fee">{{ trans('cruds.otherFee.fields.caution_fee') }}</label>
                <input class="form-control {{ $errors->has('caution_fee') ? 'is-invalid' : '' }}" type="number" name="caution_fee" id="caution_fee" value="{{ old('caution_fee', $otherFee->caution_fee) }}" step="1">
                @if($errors->has('caution_fee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('caution_fee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.caution_fee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_fee_deatils">{{ trans('cruds.otherFee.fields.other_fee_deatils') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('other_fee_deatils') ? 'is-invalid' : '' }}" name="other_fee_deatils" id="other_fee_deatils">{!! old('other_fee_deatils', $otherFee->other_fee_deatils) !!}</textarea>
                @if($errors->has('other_fee_deatils'))
                    <div class="invalid-feedback">
                        {{ $errors->first('other_fee_deatils') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherFee.fields.other_fee_deatils_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.other-fees.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $otherFee->id ?? 0 }}');
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