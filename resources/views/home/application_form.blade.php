@extends('layouts.home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/home/css/programs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/application_form.css') }}">
    <style>
        /* .select2-container--default .select2-selection--single {
            border: inherit;
            border-radius: inherit;
            height: calc(2.25rem + 2px);
            padding: .375rem .75rem;
        } */
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
                                        <button type="button" class="btn btn-cancel">Cancel</button>
                                        <button type="button" class="btn btn-primary">Save Changes</button>
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
                                                    class="form-control required" required placeholder="">
                                                <label class="form-label" for="first_name">First Names</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="middle_name" id="middle_name"
                                                    class="form-control" placeholder="">
                                                <label class="form-label" for="middle_name">Middle Name</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="last_name" id="last_name" class="form-control"
                                                    placeholder="">
                                                <label class="form-label" for="last_name">Last Name</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="date" name="date_of_birth" id="date_of_birth"
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
                                                    <option value="" disabled selected>Select your country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->name }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <label class="form-label" for="nationality">Nationality</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="passport_number" id="passport_number"
                                                    class="form-control" placeholder="">
                                                <label class="form-label" for="passport_number">Passport Number</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="email" name="email" id="email"
                                                    class="form-control required" required placeholder="">
                                                <label class="form-label" for="email">Email</label>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="input-group form-floating ">
                                                    <span class="input-group-text">+88</span>
                                                    <input type="text" class="form-control required" id="mobile"
                                                        name="mobile" required placeholder="">
                                                    <label class="form-label" for="mobile">Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="input-group form-floating">
                                                    <span class="input-group-text">+88</span>
                                                    <input type="text" class="form-control" placeholder=""
                                                        id="alternate_mobile" name="alternate_mobile">
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
                                                        name="gender" value="male">
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="female" type="radio"
                                                        name="gender" value="female">
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="other" type="radio"
                                                        name="gender" value="other">
                                                    <label class="form-check-label" for="other">Other</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Marital Status</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="single" type="radio"
                                                        name="marital" value="single">
                                                    <label class="form-check-label" for="single">Single</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="married" type="radio"
                                                        name="marital" value="married">
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
                                                    class="form-control required" required placeholder="">
                                                <label class="form-label" for="city">City</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="state" id="state"
                                                    class="form-control required" required placeholder="">
                                                <label class="form-label" for="state">State</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="country" id="country" required
                                                    class="form-control required" placeholder="">
                                                <label class="form-label" for="country">Country</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="zipcode" id="zipcode"
                                                    class="form-control required" required placeholder="">
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
                                                    <option>Under Graduation</option>
                                                    <option>Graduation</option>
                                                    <option>Post Graduation</option>
                                                </select>
                                                <label class="form-label" for="highest_degree">Highest Degree</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" class="form-control" name="institution"
                                                    id="institution" placeholder="">
                                                <label class="form-label" for="institution">Programme</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="number" class="form-control" name="grade" id="grade"
                                                    placeholder="">
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
                                                <option>IELTS</option>
                                                <option>TOEFL</option>
                                                <option>PTE</option>
                                            </select>
                                            <label class="form-label" for="exam_type">Exam Type</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="date" class="form-control" id="exam_date" name="exam_date">
                                            <label class="form-label" for="exam_date">Date of Exam</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="overall_score"
                                                name="overall_score" placeholder="">
                                            <label class="form-label" for="overall_score">Overall Score</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="listening_score"
                                                name="listening_score" placeholder="">
                                            <label class="form-label" for="listening_score">Listening Score</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="reading_score"
                                                name="reading_score" placeholder="">
                                            <label class="form-label" for="reading_score">Reading Score</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="writing_score"
                                                name="writing_score" placeholder="">
                                            <label class="form-label" for="writing_score">Writing Score</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" id="speaking_score"
                                                name="speaking_score" placeholder="">
                                            <label class="form-label" for="speaking_score">Speaking Score</label>
                                        </div>
                                    </div>



                                    <!-- Actions -->
                                    <div class="d-flex justify-content-end mt-4">
                                        {{-- <button type="button" class="btn btn-secondary">Cancel</button> --}}
                                        <div>
                                            <button type="button" class="btn btn-outline-primary me-2">
                                                Send to Advisor
                                            </button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="documentAccordion">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <div class="accordion-button title" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseDocument" aria-expanded="true" aria-controls="collapseDocument">
                                <div class="d-flex justify-content-between align-items-center w-100 gap-lg-4">
                                    <div>
                                        <h4>Document Checklist</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="collapseDocument" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#documentAccordion">
                            <div class="accordion-body">
                                <div class="file-list"></div>

                                <!-- Upload Box -->
                                <input type="file" id="fileInput" class="d-none" accept=".jpeg,.jpg,.png,.pdf">
                                <div class="upload-box mt-3" id="uploadBox">
                                    <p>
                                        <i class="bi bi-upload"></i>
                                        Drag and drop or <span class="text-danger">browse</span> to upload <b>Transcript
                                            Certificate</b>
                                    </p>
                                    <small class="text-muted">Supports JPEG, PNG & PDF</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/home/js/application_form.js') }}"></script>
@endpush
