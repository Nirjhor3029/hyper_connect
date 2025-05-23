@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.universityPartnership.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.university-partnerships.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="university_id">{{ trans('cruds.universityPartnership.fields.university') }}</label>
                <select class="form-control select2 {{ $errors->has('university') ? 'is-invalid' : '' }}" name="university_id" id="university_id" required>
                    @foreach($universities as $id => $entry)
                        <option value="{{ $id }}" {{ old('university_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('university'))
                    <div class="invalid-feedback">
                        {{ $errors->first('university') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.university_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="partner_name">{{ trans('cruds.universityPartnership.fields.partner_name') }}</label>
                <input class="form-control {{ $errors->has('partner_name') ? 'is-invalid' : '' }}" type="text" name="partner_name" id="partner_name" value="{{ old('partner_name', '') }}" required>
                @if($errors->has('partner_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('partner_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.partner_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="agreement_url">{{ trans('cruds.universityPartnership.fields.agreement_url') }}</label>
                <input class="form-control {{ $errors->has('agreement_url') ? 'is-invalid' : '' }}" type="text" name="agreement_url" id="agreement_url" value="{{ old('agreement_url', '') }}" required>
                @if($errors->has('agreement_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agreement_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.agreement_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="active_from">{{ trans('cruds.universityPartnership.fields.active_from') }}</label>
                <input class="form-control date {{ $errors->has('active_from') ? 'is-invalid' : '' }}" type="text" name="active_from" id="active_from" value="{{ old('active_from') }}">
                @if($errors->has('active_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('active_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.active_from_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="active_to">{{ trans('cruds.universityPartnership.fields.active_to') }}</label>
                <input class="form-control date {{ $errors->has('active_to') ? 'is-invalid' : '' }}" type="text" name="active_to" id="active_to" value="{{ old('active_to') }}">
                @if($errors->has('active_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('active_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.active_to_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.universityPartnership.fields.partner_type') }}</label>
                <select class="form-control {{ $errors->has('partner_type') ? 'is-invalid' : '' }}" name="partner_type" id="partner_type">
                    <option value disabled {{ old('partner_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\UniversityPartnership::PARTNER_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('partner_type', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('partner_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('partner_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.partner_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="agreement_file">{{ trans('cruds.universityPartnership.fields.agreement_file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('agreement_file') ? 'is-invalid' : '' }}" id="agreement_file-dropzone">
                </div>
                @if($errors->has('agreement_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agreement_file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.universityPartnership.fields.agreement_file_helper') }}</span>
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
    var uploadedAgreementFileMap = {}
Dropzone.options.agreementFileDropzone = {
    url: '{{ route('admin.university-partnerships.storeMedia') }}',
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="agreement_file[]" value="' + response.name + '">')
      uploadedAgreementFileMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedAgreementFileMap[file.name]
      }
      $('form').find('input[name="agreement_file[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($universityPartnership) && $universityPartnership->agreement_file)
          var files =
            {!! json_encode($universityPartnership->agreement_file) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="agreement_file[]" value="' + file.file_name + '">')
            }
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