@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.university.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.universities.update", [$university->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="country_id">{{ trans('cruds.university.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $university->country->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.university.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $university->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code">{{ trans('cruds.university.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $university->code) }}">
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="university_type">{{ trans('cruds.university.fields.university_type') }}</label>
                <input class="form-control {{ $errors->has('university_type') ? 'is-invalid' : '' }}" type="text" name="university_type" id="university_type" value="{{ old('university_type', $university->university_type) }}">
                @if($errors->has('university_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('university_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.university_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.university.fields.address') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{!! old('address', $university->address) !!}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="university_details">{{ trans('cruds.university.fields.university_details') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('university_details') ? 'is-invalid' : '' }}" name="university_details" id="university_details">{!! old('university_details', $university->university_details) !!}</textarea>
                @if($errors->has('university_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('university_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.university_details_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="accreditation">{{ trans('cruds.university.fields.accreditation') }}</label>
                <input class="form-control {{ $errors->has('accreditation') ? 'is-invalid' : '' }}" type="text" name="accreditation" id="accreditation" value="{{ old('accreditation', $university->accreditation) }}">
                @if($errors->has('accreditation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('accreditation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.accreditation_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="website">{{ trans('cruds.university.fields.website') }}</label>
                <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text" name="website" id="website" value="{{ old('website', $university->website) }}" required>
                @if($errors->has('website'))
                    <div class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.website_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_email">{{ trans('cruds.university.fields.contact_email') }}</label>
                <input class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" type="email" name="contact_email" id="contact_email" value="{{ old('contact_email', $university->contact_email) }}" required>
                @if($errors->has('contact_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.contact_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_phone">{{ trans('cruds.university.fields.contact_phone') }}</label>
                <input class="form-control {{ $errors->has('contact_phone') ? 'is-invalid' : '' }}" type="text" name="contact_phone" id="contact_phone" value="{{ old('contact_phone', $university->contact_phone) }}">
                @if($errors->has('contact_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.contact_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo">{{ trans('cruds.university.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo_url">{{ trans('cruds.university.fields.logo_url') }}</label>
                <input class="form-control {{ $errors->has('logo_url') ? 'is-invalid' : '' }}" type="text" name="logo_url" id="logo_url" value="{{ old('logo_url', $university->logo_url) }}">
                @if($errors->has('logo_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.logo_url_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $university->is_active || old('is_active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('cruds.university.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.university.fields.is_active_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.universities.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $university->id ?? 0 }}');
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

<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.universities.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($university) && $university->logo)
      var file = {!! json_encode($university->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection