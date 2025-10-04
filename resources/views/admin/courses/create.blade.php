@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.course.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
                @csrf
                {{-- Country Select --}}
                <div class="form-group">
                    <label class="required" for="country_id">{{ trans('cruds.university.fields.country') }}</label>
                    <select class="form-control select2 {{ $errors->has('country_id') ? 'is-invalid' : '' }}"
                        name="country_id" id="country_id" required>

                        @foreach ($countries as $id => $entry)
                            <option value="{{ $id }}" {{ old('country_id', 127) == $id ? 'selected' : '' }}>
                                {{ $entry }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('country_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('country_id') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.university.fields.country_helper') }}</span>
                </div>

                {{-- University Select --}}
                <div class="form-group">
                    <label class="required" for="university_id">{{ trans('cruds.course.fields.university') }}</label>
                    <select class="form-control select2  {{ $errors->has('university_id') ? 'is-invalid' : '' }}"
                        name="university_id" id="university_id" required>
                        <option value="">Select University</option>
                        @foreach ($universities as $id => $entry)
                            <option value="{{ $id }}" {{ old('university_id') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('university_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('university_id') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.university_helper') }}</span>
                </div>

                {{-- Program Select --}}
                <div class="form-group">
                    <label class="required" for="program_id">{{ trans('cruds.course.fields.program') }}</label>
                    <select class="form-control select2 {{ $errors->has('program_id') ? 'is-invalid' : '' }}"
                        name="program_id" id="program_id" required>
                        <option value="">Select Program</option>
                        @foreach ($programs as $id => $entry)
                            <option value="{{ $id }}" {{ old('program_id') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('program_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('program_id') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.program_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required">{{ trans('cruds.course.fields.course_mode') }}</label>
                    @foreach (App\Models\Course::COURSE_MODE_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('course_mode') ? 'is-invalid' : '' }}">
                            <input class="form-check-input" type="radio" id="course_mode_{{ $key }}"
                                name="course_mode" value="{{ $key }}"
                                {{ old('course_mode', 'full_time') === (string) $key ? 'checked' : '' }} required>
                            <label class="form-check-label"
                                for="course_mode_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if ($errors->has('course_mode'))
                        <div class="invalid-feedback">
                            {{ $errors->first('course_mode') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.course_mode_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.course.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                        name="name" id="name" value="{{ old('name', '') }}" required>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.name_helper') }}</span>
                </div>


                <div class="row">
                    {{-- total_fees --}}
                    <div class="form-group col-md-3">
                        <label class="required" for="total_fees">{{ trans('cruds.course.fields.total_fees') }}</label>
                        <input class="form-control {{ $errors->has('total_fees') ? 'is-invalid' : '' }}" type="number"
                            name="total_fees" id="total_fees" value="{{ old('total_fees', '') }}" step="1" required>
                        @if ($errors->has('total_fees'))
                            <div class="invalid-feedback">
                                {{ $errors->first('total_fees') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.course.fields.total_fees_helper') }}</span>
                    </div>
                    {{-- duration --}}
                    <div class="form-group col-md-3">
                        <label class="required" for="duration">{{ trans('cruds.course.fields.duration') }}</label>
                        <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text"
                            name="duration" id="duration" value="{{ old('duration', '') }}" required>
                        @if ($errors->has('duration'))
                            <div class="invalid-feedback">
                                {{ $errors->first('duration') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.course.fields.duration_helper') }}</span>
                    </div>
                    {{-- opening_date --}}
                    <div class="form-group col-md-3">
                        <label for="opening_date">Opening Date</label>
                        <input type="date" class="form-control" name="opening_date" id="opening_date">
                    </div>
                    {{-- closing_date --}}
                    <div class="form-group col-md-3">
                        <label for="closing_date">Opening Date</label>
                        <input type="date" class="form-control" name="closing_date" id="closing_date">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group  col-md-3">
                        <label for="1st_year_fees">1st year Fees</label>
                        <input class="form-control" type="number" name="1st_year_fees" id="1st_year_fees"
                            value="{{ old('1st_year_fees', '') }}" step="1" required>
                    </div>
                    <div class="form-group  col-md-3">
                        <label for="2nd_year_fees">2nd year Fees</label>
                        <input class="form-control" type="number" name="2nd_year_fees" id="2nd_year_fees"
                            value="{{ old('2nd_year_fees', '') }}" step="1">
                    </div>
                    <div class="form-group  col-md-3">
                        <label for="3rd_year_fees">3rd year Fees</label>
                        <input class="form-control" type="number" name="3rd_year_fees" id="3rd_year_fees"
                            value="{{ old('3rd_year_fees', '') }}" step="1">
                    </div>
                    <div class="form-group  col-md-3">
                        <label for="4th_year_fees">4th year Fees</label>
                        <input class="form-control" type="number" name="4th_year_fees" id="4th_year_fees"
                            value="{{ old('4th_year_fees', '') }}" step="1">
                    </div>
                </div>



                <div class="form-group">
                    <label for="no_of_semester">{{ trans('cruds.course.fields.no_of_semester') }}</label>
                    <input class="form-control {{ $errors->has('no_of_semester') ? 'is-invalid' : '' }}" type="number"
                        name="no_of_semester" id="no_of_semester" value="{{ old('no_of_semester', '') }}"
                        step="1">
                    @if ($errors->has('no_of_semester'))
                        <div class="invalid-feedback">
                            {{ $errors->first('no_of_semester') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.no_of_semester_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="course_details">{{ trans('cruds.course.fields.course_details') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('course_details') ? 'is-invalid' : '' }}"
                        name="course_details" id="course_details">{!! old('course_details') !!}</textarea>
                    @if ($errors->has('course_details'))
                        <div class="invalid-feedback">
                            {{ $errors->first('course_details') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.course_details_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="url">{{ trans('cruds.course.fields.url') }}</label>
                    <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text"
                        name="url" id="url" value="{{ old('url', '') }}">
                    @if ($errors->has('url'))
                        <div class="invalid-feedback">
                            {{ $errors->first('url') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.url_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="scholarship">{{ trans('cruds.course.fields.scholarship') }}</label>
                    <input class="form-control {{ $errors->has('scholarship') ? 'is-invalid' : '' }}" type="text"
                        name="scholarship" id="scholarship" value="{{ old('scholarship', '') }}">
                    @if ($errors->has('scholarship'))
                        <div class="invalid-feedback">
                            {{ $errors->first('scholarship') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.scholarship_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="commission">{{ trans('cruds.course.fields.commission') }}</label>
                    <input class="form-control {{ $errors->has('commission') ? 'is-invalid' : '' }}" type="number"
                        name="commission" id="commission" value="{{ old('commission', '') }}" step="1">
                    @if ($errors->has('commission'))
                        <div class="invalid-feedback">
                            {{ $errors->first('commission') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.commission_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.course.fields.english_requirement') }}</label>
                    @foreach (App\Models\Course::ENGLISH_REQUIREMENT_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('english_requirement') ? 'is-invalid' : '' }}">
                            <input class="form-check-input english-requirement-radio" type="radio"
                                id="english_requirement_{{ $key }}" name="english_requirement"
                                value="{{ $key }}"
                                {{ old('english_requirement', 'no') === (string) $key ? 'checked' : '' }}>
                            <label class="form-check-label"
                                for="english_requirement_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if ($errors->has('english_requirement'))
                        <div class="invalid-feedback">
                            {{ $errors->first('english_requirement') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.english_requirement_helper') }}</span>
                </div>

                {{-- ✅ minimum_english_score input --}}
                <div class="form-group" id="minimum-score-wrapper" style="display: none;">
                    <label for="minimum_english_score">Minimum English Score</label>
                    <input type="text" name="minimum_english_score" id="minimum_english_score" class="form-control"
                        value="{{ old('minimum_english_score') }}">
                    <span class="help-block">Provide the minimum required score.</span>
                </div>



                <div class="form-group">
                    <label
                        for="custom_message_for_student">{{ trans('cruds.course.fields.custom_message_for_student') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('custom_message_for_student') ? 'is-invalid' : '' }}"
                        name="custom_message_for_student" id="custom_message_for_student">{!! old('custom_message_for_student') !!}</textarea>
                    @if ($errors->has('custom_message_for_student'))
                        <div class="invalid-feedback">
                            {{ $errors->first('custom_message_for_student') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.custom_message_for_student_helper') }}</span>
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
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '{{ route('admin.courses.storeCKEditorImages') }}',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                                e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '{{ $course->id ?? 0 }}');
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

    {{-- ✅ JS to toggle --}}

    <script>
        function toggleMinimumScore() {
            let selected = document.querySelector('input[name="english_requirement"]:checked')?.value;
            if (selected && selected !== 'no') {
                document.getElementById('minimum-score-wrapper').style.display = 'block';
            } else {
                document.getElementById('minimum-score-wrapper').style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initially check
            toggleMinimumScore();

            // On change
            document.querySelectorAll('.english-requirement-radio').forEach(function(radio) {
                radio.addEventListener('change', toggleMinimumScore);
            });
        });
    </script>





    <script>
        $(document).ready(function() {
            function loadUniversityAndProgram(countryId, selectedUniversityId = null, selectedProgramId = null) {
                $('#university_id').html('<option value="">Loading...</option>');
                $('#program_id').html('<option value="">Loading...</option>');

                if (!countryId) return;

                fetch(`/admin/get-universities-programs/${countryId}`)
                    .then(response => response.json())
                    .then(data => {
                        let universityOptions = '<option value="">Select University</option>';
                        $.each(data.universities, function(id, name) {
                            const selected = (id == selectedUniversityId) ? 'selected' : '';
                            universityOptions += `<option value="${id}" ${selected}>${name}</option>`;
                        });
                        $('#university_id').html(universityOptions);

                        let programOptions = '<option value="">Select Program</option>';
                        $.each(data.programs, function(id, name) {
                            const selected = (id == selectedProgramId) ? 'selected' : '';
                            programOptions += `<option value="${id}" ${selected}>${name}</option>`;
                        });
                        $('#program_id').html(programOptions);

                        $('#university_id').select2();
                        $('#program_id').select2();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }

            // On country change
            $('#country_id').on('change', function() {
                const countryId = this.value;
                loadUniversityAndProgram(countryId);
            });

            // Trigger load on page load if default country is selected
            const defaultCountryId = $('#country_id').val();
            const oldUniversityId = "{{ old('university_id') }}";
            const oldProgramId = "{{ old('program_id') }}";
            if (defaultCountryId) {
                // loadUniversityAndProgram(defaultCountryId, oldUniversityId, oldProgramId);
            }
        });
    </script>
@endsection
