@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Convert Student file to Prospectus
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.students.update", [$student->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="admission_stage" value="documentation">
            <input type="hidden" name="admission_status" value="prospective">
            <input type="hidden" name="url" value="{{$url}}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="required" for="name">{{ trans('cruds.student.fields.name') }}</label>
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $student->name) }}" required>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.student.fields.name_helper') }}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">{{ trans('cruds.student.fields.email') }}</label>
                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $student->email) }}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.student.fields.email_helper') }}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="required" for="phone">{{ trans('cruds.student.fields.phone') }}</label>
                        <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $student->phone) }}" required>
                        @if($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.student.fields.phone_helper') }}</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dob">{{ trans('cruds.student.fields.dob') }}</label>
                        <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $student->dob) }}">
                        @if($errors->has('dob'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dob') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.student.fields.dob_helper') }}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{{ trans('cruds.student.fields.gender') }}</label>
                        <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender">
                            <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\Student::GENDER_SELECT as $key => $label)
                                <option value="{{ $key }}" {{ old('gender', $student->gender) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('gender'))
                            <div class="invalid-feedback">
                                {{ $errors->first('gender') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.student.fields.gender_helper') }}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="passport_no">{{ trans('cruds.student.fields.passport_no') }}</label>
                        <input class="form-control {{ $errors->has('passport_no') ? 'is-invalid' : '' }}" type="text" name="passport_no" id="passport_no" value="{{ old('passport_no', $student->passport_no) }}">
                        @if($errors->has('passport_no'))
                            <div class="invalid-feedback">
                                {{ $errors->first('passport_no') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.student.fields.passport_no_helper') }}</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="confirm_country_id">Confirm Country</label>
                        <select class="form-control select2" name="confirm_country_id" id="confirm_country_id">
                            <option value="">Select a country</option>
                            @foreach($interested_countries as $id => $country)
                                <option value="{{ $id }}" {{ old('confirm_country_id', $student->confirm_country_id) == $id ? 'selected' : '' }}>
                                    {{ $country }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="confirm_university_id">Confirm University</label>
                        <select class="form-control select2" name="confirm_university_id" id="confirm_university_id">
                            <option value="">Select a university</option>
                            @foreach($univertsities as $id => $university)
                                <option value="{{ $id }}" {{ old('confirm_university_id', $student->confirm_university_id) == $id ? 'selected' : '' }}>
                                    {{ $university }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="confirm_subject_id">Confirm Subject</label>
                        <select class="form-control select2" name="confirm_subject_id" id="confirm_subject_id">
                            <option value="">Select a subject</option>
                            @foreach($subjects as $id => $subject)
                                <option value="{{ $id }}" {{ old('confirm_subject_id', $student->confirm_subject_id) == $id ? 'selected' : '' }}>
                                    {{ $subject }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="confirm_program_id">Confirm Program</label>
                        <select class="form-control select2" name="confirm_program_id" id="confirm_program_id">
                            <option value="">Select a program</option>
                            @foreach($programs as $id => $program)
                                <option value="{{ $id }}" {{ old('confirm_program_id', $student->confirm_program_id) == $id ? 'selected' : '' }}>
                                    {{ $program }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">{{ trans('cruds.student.fields.photo') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                        </div>
                        @if($errors->has('photo'))
                            <div class="invalid-feedback">
                                {{ $errors->first('photo') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.student.fields.photo_helper') }}</span>
                    </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="academic_certificates">{{ trans('cruds.student.fields.academic_certificates') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('academic_certificates') ? 'is-invalid' : '' }}" id="academic_certificates-dropzone">
                    </div>
                    @if($errors->has('academic_certificates'))
                        <div class="invalid-feedback">
                            {{ $errors->first('academic_certificates') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.student.fields.academic_certificates_helper') }}</span>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="attachments">{{ trans('cruds.student.fields.attachments') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('attachments') ? 'is-invalid' : '' }}" id="attachments-dropzone">
                    </div>
                    @if($errors->has('attachments'))
                        <div class="invalid-feedback">
                            {{ $errors->first('attachments') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.student.fields.attachments_helper') }}</span>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="medical_certificates">{{ trans('cruds.student.fields.medical_certificates') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('medical_certificates') ? 'is-invalid' : '' }}" id="medical_certificates-dropzone">
                    </div>
                    @if($errors->has('medical_certificates'))
                        <div class="invalid-feedback">
                            {{ $errors->first('medical_certificates') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.student.fields.medical_certificates_helper') }}</span>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">{{ trans('cruds.student.fields.address') }}</label>
                        <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address', $student->address) }}</textarea>
                        @if($errors->has('address'))
                            <div class="invalid-feedback">
                                {{ $errors->first('address') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.student.fields.address_helper') }}</span>
                    </div>
                </div>
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
                                    xhr.open('POST', '{{ route('admin.students.storeCKEditorImages') }}', true);
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
                                    data.append('crud_id', '{{ $student->id ?? 0 }}');
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
    Dropzone.options.photoDropzone = {
        url: '{{ route('admin.students.storeMedia') }}',
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
            $('form').find('input[name="photo"]').remove()
            $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
        },
        removedfile: function (file) {
            file.previewElement.remove()
            if (file.status !== 'error') {
                $('form').find('input[name="photo"]').remove()
                this.options.maxFiles = this.options.maxFiles + 1
            }
        },
        init: function () {
        @if(isset($student) && $student->photo)
            var file = {!! json_encode($student->photo) !!}
            this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
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
    var uploadedAcademicCertificatesMap = {}
    Dropzone.options.academicCertificatesDropzone = {
        url: '{{ route('admin.students.storeMedia') }}',
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            size: 10
        },
        success: function (file, response) {
            $('form').append('<input type="hidden" name="academic_certificates[]" value="' + response.name + '">')
            uploadedAcademicCertificatesMap[file.name] = response.name
        },
        removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedAcademicCertificatesMap[file.name]
            }
            $('form').find('input[name="academic_certificates[]"][value="' + name + '"]').remove()
        },
        init: function () {
        @if(isset($student) && $student->academic_certificates)
            var files =
                {!! json_encode($student->academic_certificates) !!}
            for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="academic_certificates[]" value="' + file.file_name + '">')
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
<script>
    var uploadedAttachmentsMap = {}
    Dropzone.options.attachmentsDropzone = {
        url: '{{ route('admin.students.storeMedia') }}',
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            size: 10
        },
        success: function (file, response) {
            $('form').append('<input type="hidden" name="attachments[]" value="' + response.name + '">')
            uploadedAttachmentsMap[file.name] = response.name
        },
        removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedAttachmentsMap[file.name]
            }
            $('form').find('input[name="attachments[]"][value="' + name + '"]').remove()
        },
        init: function () {
        @if(isset($student) && $student->attachments)
            var files =
                {!! json_encode($student->attachments) !!}
            for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="attachments[]" value="' + file.file_name + '">')
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
<script>
    var uploadedMedicalCertificatesMap = {}
    Dropzone.options.medicalCertificatesDropzone = {
        url: '{{ route('admin.students.storeMedia') }}',
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            size: 10
        },
        success: function (file, response) {
            $('form').append('<input type="hidden" name="medical_certificates[]" value="' + response.name + '">')
            uploadedMedicalCertificatesMap[file.name] = response.name
        },
        removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedMedicalCertificatesMap[file.name]
            }
            $('form').find('input[name="medical_certificates[]"][value="' + name + '"]').remove()
        },
        init: function () {
        @if(isset($student) && $student->medical_certificates)
            var files =
                {!! json_encode($student->medical_certificates) !!}
            for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="medical_certificates[]" value="' + file.file_name + '">')
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
