@extends('layouts.home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/home/css/programs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/application_form.css') }}">
    <style>
    </style>
@endpush

@section('header')
    <!-- Top-Header-after-login -->
    <div class="top_header_after_login">
        @include('layouts._partials.top_header_after_login')
    </div>
@endsection

@section('main_content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            @include('layouts._partials.alert_box')
            <div class=" py-4">
                <div class="accordion" id="applicationAccordion">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <div class="accordion-button title" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
                                <div class="d-flex justify-content-between align-items-center w-100 gap-lg-4">
                                    <div>
                                        <h4>Common Application Form</h4>
                                        <p class="text-muted small">
                                            Please check your details before applying. Information on the Common Application
                                            Form
                                            can be edited with approval from your advisor.
                                        </p>
                                    </div>
                                    <div class="text-end action-buttons">
                                        {{-- <button type="button" class="btn btn-cancel">Cancel</button>
                                        <button type="button" class="btn btn-primary">Save Changes</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseForm" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#applicationAccordion">
                            <div class="accordion-body">


                                <form id="applicationForm" method="POST"
                                    action="{{ route('student.application.form.submit') }}">
                                    @csrf

                                    <!-- Personal Information -->
                                    <section class="personal-information">
                                        <h5 class="fw-bold mt-4">Personal Information</h5>
                                        <div class="row g-3 mb-3">
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="first_name" id="first_name"
                                                    value="{{ old('first_name', isset($authUser->first_name) ? $authUser->first_name : $authUser->name ?? '') }}"
                                                    class="form-control required" required placeholder="">
                                                <label class="form-label" for="first_name">First Names</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="middle_name" id="middle_name"
                                                    value="{{ old('middle_name', $authUser->middle_name ?? '') }}"
                                                    class="form-control" placeholder="">
                                                <label class="form-label" for="middle_name">Middle Name</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="last_name" id="last_name" class="form-control"
                                                    value="{{ old('last_name', $authUser->last_name ?? '') }}"
                                                    placeholder="">
                                                <label class="form-label" for="last_name">Last Name</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="date" name="dob" id="date_of_birth"
                                                    value="{{ old('dob', isset($authUser->dob) ? \Carbon\Carbon::parse($authUser->dob)->format('Y-m-d') : '') }}"
                                                    class="form-control">
                                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                            </div>
                                            {{-- <div class="col-md-4 form-floating">
                                                <input type="text" name="nationality" id="nationality"
                                                    class="form-control required" required placeholder="">
                                                <label class="form-label" for="nationality">Nationality</label>
                                            </div> --}}
                                            <div class="col-md-4 form-floating">
                                                <select class="form-select " name="nationality" id="nationality">
                                                    <option value="" disabled selected>Select your nationality
                                                    </option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->nationality }}"
                                                            {{ $country->nationality == $authUser->nationality ? 'selected' : '' }}>
                                                            {{ $country->nationality }}</option>
                                                    @endforeach
                                                </select>
                                                <label class="form-label" for="nationality">Nationality</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="passport_no" id="passport_number"
                                                    value="{{ old('passport_no', $authUser->passport_no ?? '') }}"
                                                    class="form-control" placeholder="">
                                                <label class="form-label" for="passport_number">Passport Number</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="email" name="email" id="email"
                                                    value="{{ $authUser->email ?? '' }}" readonly
                                                    class="form-control required" required placeholder="">
                                                <label class="form-label" for="email">Email</label>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="input-group form-floating ">
                                                    <span
                                                        class="input-group-text dial_code">{{ $selected_country->dial_code ?? '' }}</span>
                                                    <input type="text" class="form-control required" id="mobile"
                                                        value="{{ old('mobile', isset($authUser->phone) && $authUser->phone != 0 ? $authUser->phone : '') }}"
                                                        name="phone" required placeholder="">
                                                    <label class="form-label" for="mobile">Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="input-group form-floating">
                                                    <span
                                                        class="input-group-text dial_code">{{ $selected_country->dial_code ?? '' }}</span>
                                                    <input type="text" class="form-control" placeholder=""
                                                        id="alternate_mobile" name="alt_phone"
                                                        value="{{ old('alt_phone', $authUser->alt_phone ?? '') }}">
                                                    <label class="form-label" for="alternate_mobile">Alternate
                                                        Mobile</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                    <!-- Gender & Marital Status -->
                                    <section class="gender-marital-status">
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <label class="form-label">Gender</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="male" type="radio"
                                                        name="gender" value="male"
                                                        {{ $authUser->gender == 'male' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="female" type="radio"
                                                        name="gender" value="female"
                                                        {{ $authUser->gender == 'female' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="other" type="radio"
                                                        name="gender" value="other"
                                                        {{ $authUser->gender == 'other' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="other">Other</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Marital Status</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="single" type="radio"
                                                        name="marital_status" value="single"
                                                        {{ $authUser->marital_status == 'single' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="single">Single</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="married" type="radio"
                                                        name="marital_status" value="married"
                                                        {{ $authUser->marital_status == 'married' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="married">Married</label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                    <!-- Residence -->
                                    <section class="residence">
                                        <h6 class="fw-bold mt-4">Residence</h6>
                                        <div class="row g-3">
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="city" id="city"
                                                    class="form-control required" required placeholder=""
                                                    value="{{ old('city', $authUser->city ?? '') }}">
                                                <label class="form-label" for="city">City</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="state" id="state"
                                                    class="form-control required" required placeholder=""
                                                    value="{{ old('state', $authUser->state ?? '') }}">
                                                <label class="form-label" for="state">State</label>
                                            </div>
                                            {{-- <div class="col-md-4 form-floating">
                                                <input type="text" name="country" id="country" required
                                                    class="form-control required" placeholder=""
                                                    value="{{ old('country', $authUser->country ?? '') }}">
                                                <label class="form-label" for="country">Country</label>
                                            </div> --}}
                                            <div class="col-md-4 form-floating">
                                                <select class="form-select " name="country_id" id="country">
                                                    <option value="" disabled selected>Select your country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}"
                                                            {{ $country->id == $authUser->country_id ? 'selected' : '' }}>
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <label class="form-label" for="country">Country</label>
                                            </div>

                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="zipcode" id="zipcode"
                                                    class="form-control required" required placeholder=""
                                                    value="{{ old('zipcode', $authUser->zipcode ?? '') }}">
                                                <label class="form-label" for="zipcode">Zipcode</label>
                                            </div>
                                        </div>
                                    </section>

                                    <hr class="section-divider">


                                    <!-- Educational Background -->
                                    <section class="educational-background">
                                        <h6 class="fw-bold mt-4">Educational Background</h6>
                                        <div class="row g-3">
                                            <div class="col-md-4 form-floating">
                                                <select class="form-select" name="highest_degree" id="highest_degree">
                                                    <option value="" disabled selected>Select your highest degree
                                                    </option>
                                                    @foreach ($education_levels as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ optional($student_highest_education_level)->id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->title }}
                                                            {{ isset($item->short_code) ? ' (' . $item->short_code . ')' : '' }}
                                                        </option>
                                                    @endforeach
                                                    {{-- <option>Under Graduation</option>
                                                    <option>Graduation</option>
                                                    <option>Post Graduation</option> --}}
                                                </select>
                                                <label class="form-label" for="highest_degree">Highest Degree</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" class="form-control" name="program" id="program"
                                                    placeholder=""
                                                    value="{{ old('program', $student_highest_education_level->pivot->program ?? '') }}">
                                                <label class="form-label" for="program">Programme</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="number" step="0.01" class="form-control" name="grade"
                                                    id="grade" placeholder=""
                                                    value="{{ old('grade', $student_highest_education_level->pivot->grade ?? '') }}">
                                                <label class="form-label" for="grade">Grade Scale</label>
                                            </div>
                                        </div>
                                    </section>

                                    <hr class="section-divider">

                                    <!-- Test Scores -->
                                    <h6 class="fw-bold mt-4">Test Scores</h6>
                                    <div class="row g-3">
                                        <div class="col-md-4 form-floating">
                                            <select class="form-select" name="exam_type" id="exam_type">
                                                <option value="IELTS"
                                                    {{ optional($test)->exam_type == 'IELTS' ? 'selected' : '' }}>IELTS
                                                </option>
                                                <option value="TOEFL"
                                                    {{ optional($test)->exam_type == 'TOEFL' ? 'selected' : '' }}>TOEFL
                                                </option>
                                                <option value="PTE"
                                                    {{ optional($test)->exam_type == 'PTE' ? 'selected' : '' }}>
                                                    PTE</option>
                                                <option value="MOI"
                                                    {{ optional($test)->exam_type == 'MOI' ? 'selected' : '' }}>
                                                    MOI</option>
                                            </select>
                                            <label class="form-label" for="exam_type">Exam Type</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="date" class="form-control" id="exam_date" name="exam_date"
                                                placeholder="" value="{{ old('exam_date', $test->exam_date ?? '') }}">
                                            <label class="form-label" for="exam_date">Date of Exam</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="overall_score"
                                                name="overall_score" placeholder=""
                                                value="{{ old('overall_score', $test->overall_score ?? '') }}">
                                            <label class="form-label" for="overall_score">Overall Score</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="listening_score"
                                                name="listening_score" placeholder=""
                                                value="{{ old('listening_score', $test->listening_score ?? '') }}">
                                            <label class="form-label" for="listening_score">Listening Score</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="reading_score"
                                                name="reading_score" placeholder=""
                                                value="{{ old('reading_score', $test->reading_score ?? '') }}">
                                            <label class="form-label" for="reading_score">Reading Score</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="writing_score"
                                                name="writing_score" placeholder=""
                                                value="{{ old('writing_score', $test->writing_score ?? '') }}">
                                            <label class="form-label" for="writing_score">Writing Score</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="speaking_score"
                                                name="speaking_score" placeholder=""
                                                value="{{ old('speaking_score', $test->speaking_score ?? '') }}">
                                            <label class="form-label" for="speaking_score">Speaking Score</label>
                                        </div>
                                    </div>



                                    <!-- Actions -->
                                    <div class="d-flex justify-content-end mt-4">
                                        {{-- <button type="button" class="btn btn-secondary">Cancel</button> --}}
                                        <div>
                                            <button type="button" class="btn btn-outline-primary me-2" disabled style="cursor: no-drop">
                                                Send to Councilor
                                            </button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                {{-- Document Checklist --}}
                {{-- OLD version --}}
                {{-- @include('home._partials.document_upload') --}} 

                {{-- New version --}}
                @include('home._partials.document_checklist_accordion', ['uploads' => $uploads])


            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/home/js/application_form.js') }}"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
