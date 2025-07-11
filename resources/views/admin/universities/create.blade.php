@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.university.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.universities.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="country_id">{{ trans('cruds.university.fields.country') }}</label>
                    <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}"
                            name="country_id" id="country_id" required>
                        @foreach($countries as $id => $entry)
                            <option value="{{ $id }}"
                                {{ old('country_id', 127) == $id ? 'selected' : '' }}>
                                {{ $entry }}
                            </option>

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
                    <label class="required" for="state_id">{{ trans('cruds.university.fields.state') }}</label>
                    <select class="form-control select2 {{ $errors->has('state') ? 'is-invalid' : '' }}" name="state_id"
                            id="state_id" required>
                        @foreach($states as $id => $entry)
                            <option
                                value="{{ $id }}" {{ old('state_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('state'))
                        <div class="invalid-feedback">
                            {{ $errors->first('state') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.state_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="city_id">{{ trans('cruds.university.fields.city') }}</label>
                    <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id"
                            id="city_id" required>
                        @foreach($cities as $id => $entry)
                            <option
                                value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.city_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.university.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                           id="name" value="{{ old('name', '') }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="code">{{ trans('cruds.university.fields.code') }}</label>
                    <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code"
                           id="code" value="{{ old('code', '') }}">
                    @if($errors->has('code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('code') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.code_helper') }}</span>
                </div>
                {{-- <div class="form-group">
                     <label for="university_type">{{ trans('cruds.university.fields.university_type') }}</label>
                     <input class="form-control {{ $errors->has('university_type') ? 'is-invalid' : '' }}" type="text" name="university_type" id="university_type" value="{{ old('university_type', '') }}">
                     @if($errors->has('university_type'))
                         <div class="invalid-feedback">
                             {{ $errors->first('university_type') }}
                         </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.university.fields.university_type_helper') }}</span>
                 </div>--}}
                <div class="form-group">
                    <label for="address" class="required">{{ trans('cruds.university.fields.address') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('address') ? 'is-invalid' : '' }}"
                              name="address" id="address">{!! old('address') !!}</textarea>
                    @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.address_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="university_details">{{ trans('cruds.university.fields.university_details') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('university_details') ? 'is-invalid' : '' }}"
                              name="university_details"
                              id="university_details">{!! old('university_details') !!}</textarea>
                    @if($errors->has('university_details'))
                        <div class="invalid-feedback">
                            {{ $errors->first('university_details') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.university_details_helper') }}</span>
                </div>
                {{--   <div class="form-group">
                       <label for="accreditation">{{ trans('cruds.university.fields.accreditation') }}</label>
                       <input class="form-control {{ $errors->has('accreditation') ? 'is-invalid' : '' }}" type="text" name="accreditation" id="accreditation" value="{{ old('accreditation', '') }}">
                       @if($errors->has('accreditation'))
                           <div class="invalid-feedback">
                               {{ $errors->first('accreditation') }}
                           </div>
                       @endif
                       <span class="help-block">{{ trans('cruds.university.fields.accreditation_helper') }}</span>
                   </div>--}}
                <div class="form-group">
                    <label class="required" for="website">{{ trans('cruds.university.fields.website') }}</label>
                    <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text"
                           name="website" id="website" value="{{ old('website', '') }}" required>
                    @if($errors->has('website'))
                        <div class="invalid-feedback">
                            {{ $errors->first('website') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.website_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required"
                           for="contact_email">{{ trans('cruds.university.fields.contact_email') }}</label>
                    <input class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" type="email"
                           name="contact_email" id="contact_email" value="{{ old('contact_email') }}" required>
                    @if($errors->has('contact_email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('contact_email') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.contact_email_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="contact_phone">{{ trans('cruds.university.fields.contact_phone') }}</label>
                    <input
                        class="form-control {{ $errors->has('contact_phone') ? 'is-invalid' : '' }}"
                        type="text"
                        name="contact_phone"
                        id="contact_phone"
                        value="{{ old('contact_phone', '') }}"
                        maxlength="20"
                        pattern="^\+?\d*$"
                        title="Only numbers and an optional + sign at the beginning are allowed"
                        oninput="validatePhone(this)"
                    >

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
                {{-- <div class="form-group">
                     <label for="logo_url">{{ trans('cruds.university.fields.logo_url') }}</label>
                     <input class="form-control {{ $errors->has('logo_url') ? 'is-invalid' : '' }}" type="text" name="logo_url" id="logo_url" value="{{ old('logo_url', '') }}">
                     @if($errors->has('logo_url'))
                         <div class="invalid-feedback">
                             {{ $errors->first('logo_url') }}
                         </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.university.fields.logo_url_helper') }}</span>
                 </div>--}}
                <div class="form-group">
                    <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                               value="1" {{ old('is_active', 0) == 1 || old('is_active') === null ? 'checked' : '' }}>
                        <label class="form-check-label"
                               for="is_active">{{ trans('cruds.university.fields.is_active') }}</label>
                    </div>
                    @if($errors->has('is_active'))
                        <div class="invalid-feedback">
                            {{ $errors->first('is_active') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.is_active_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="tags">{{ trans('cruds.university.fields.tags') }}</label>
                    <div style="padding-bottom: 4px">
                        <span class="btn btn-info btn-xs select-all"
                              style="border-radius: 0">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-xs deselect-all"
                              style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                    </div>
                    <select class="form-control select2-tagging {{ $errors->has('tags') ? 'is-invalid' : '' }}" name="tags[]" id="tags" multiple>
                        @foreach($tags as $id => $tag)
                            <option value="{{ $tag }}" {{ in_array($tag, old('tags', [])) ? 'selected' : '' }}>{{ $tag }}</option>
                        @endforeach
                    </select>

                @if($errors->has('tags'))
                        <div class="invalid-feedback">
                            {{ $errors->first('tags') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.tags_helper') }}</span>
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
                editor.plugins.get('FileRepository').createUploadAdapter = function (loader) {
                    return {
                        upload: function () {
                            return loader.file
                                .then(function (file) {
                                    return new Promise(function (resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '{{ route('admin.universities.storeCKEditorImages') }}', true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText = `Couldn't upload file: ${file.name}.`;
                                        xhr.addEventListener('error', function () {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function () {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function () {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                                            }

                                            $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                                            resolve({default: response.url});
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function (e) {
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

    <script>
        function validatePhone(input) {
            input.value = input.value.replace(/(?!^\+)\D/g, ''); // only digits after +
            if (input.value.indexOf('+') > 0) {
                input.value = input.value.replace(/\+/g, ''); // remove extra '+' inside
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.select2-tagging').select2({
                tags: true,
                tokenSeparators: [',']
            });
        });
    </script>


    <script>
        $(document).ready(function () {
            function loadStates(countryId) {
                $('#state_id').html('<option value="">Loading...</option>');
                $('#city_id').html('<option value="">Select City</option>');

                if (!countryId) return;

                fetch(`/admin/get-states/${countryId}`)
                    .then(response => response.json())
                    .then(data => {
                        let options = '<option value="">Select State</option>';
                        for (const [id, name] of Object.entries(data.states)) {
                            options += `<option value="${id}">${name}</option>`;
                        }
                        $('#state_id').html(options).trigger('change.select2');
                    });
            }

            function loadCities(stateId) {
                $('#city_id').html('<option value="">Loading...</option>');

                if (!stateId) return;

                fetch(`/admin/get-cities/${stateId}`)
                    .then(response => response.json())
                    .then(data => {
                        let options = '<option value="">Select City</option>';
                        for (const [id, name] of Object.entries(data.cities)) {
                            options += `<option value="${id}">${name}</option>`;
                        }
                        $('#city_id').html(options).trigger('change.select2');
                    });
            }

            // Load states when country changes
            $('#country_id').on('change', function () {
                const countryId = this.value;
                loadStates(countryId);
            });

            // Load cities when state changes
            $('#state_id').on('change', function () {
                const stateId = this.value;
                loadCities(stateId);
            });

            // Trigger default country on page load (e.g., Malaysia)
            const initialCountryId = $('#country_id').val();
            if (initialCountryId) {
                loadStates(initialCountryId);
            }

            const initialStateId = $('#state_id').val();
            if (initialStateId) {
                loadCities(initialStateId);
            }
        });
    </script>



@endsection
