@extends('layouts.home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/home/css/programs.css') }}">
    <style>
        .top_header_after_login .dropdown-toggle::after {
            content: none !important;
        }

        #headingOne .title {
            color: var(--text-primary) !important;
            background-color: transparent !important;
            box-shadow: none !important;

            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: center;
        }

        #headingOne .title h4 {}

        #headingOne .title::after {
            align-self: end;
            position: absolute;
        }

        #headingOne .title p {
            margin: 0;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: end;
            align-items: center;
            /* margin-top: 10px; */
            margin-right: 50px;
        }

        .action-buttons .btn {
            border-radius: 20px;
            min-width: 140px;
            /* adjust as you like */
            height: 40px;
            /* same height */
        }

        .action-buttons .btn-cancel {
            border: 1px solid var(--text-secondary);
        }


        /* overwrite bootstrap */
        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-control-plaintext~label,
        .form-floating>.form-select~label {
            transform: scale(.85) translateY(-1.9rem) translateX(.15rem);
        }

        .form-floating>label {
            margin-left: .75rem !important;
        }

        .input-group.form-floating>label {
            margin-left: 3.25rem !important;
            z-index: 100;
        }
        section{
            margin-bottom: 50px;
        }
        .form-check label{
            cursor: pointer;
        }
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
        <div class="container-fluid">
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


                                <form id="applicationForm">



                                    <!-- Personal Information -->
                                    <section class="personal-information">
                                        <h5 class="fw-bold mt-4">Personal Information</h5>
                                        <div class="row g-3 mb-3">
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="first_name" id="first_name" class="form-control required" required placeholder="">
                                                <label class="form-label" for="first_name">First Names</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="">
                                                <label class="form-label" for="middle_name">Middle Name</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="">
                                                <label class="form-label" for="last_name">Last Name</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="nationality" id="nationality" class="form-control required" required placeholder="">
                                                <label class="form-label" for="nationality">Nationality</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="passport_number" id="passport_number" class="form-control" placeholder="">
                                                <label class="form-label" for="passport_number">Passport Number</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="email" name="email" id="email" class="form-control required" required placeholder="">
                                                <label class="form-label" for="email">Email</label>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="input-group form-floating ">
                                                    <span class="input-group-text">+88</span>
                                                    <input type="text" class="form-control required" id="mobile" name="mobile" required
                                                        placeholder="">
                                                    <label class="form-label" for="mobile">Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="input-group form-floating">
                                                    <span class="input-group-text">+88</span>
                                                    <input type="text" class="form-control" placeholder="" id="alternate_mobile" name="alternate_mobile">
                                                    <label class="form-label" for="alternate_mobile">Alternate Mobile</label>
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
                                                    <input class="form-check-input" id="male" type="radio" name="gender"
                                                        value="male">
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="female" type="radio" name="gender"
                                                        value="female">
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="other" type="radio" name="gender"
                                                        value="other">
                                                    <label class="form-check-label" for="other">Other</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Marital Status</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="single" type="radio" name="marital"
                                                        value="single">
                                                    <label class="form-check-label" for="single">Single</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="married" type="radio" name="marital"
                                                        value="married">
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
                                                <input type="text" name="city" id="city" class="form-control required" required placeholder="">
                                                <label class="form-label" for="city">City</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="state" id="state" class="form-control required" required placeholder="">
                                                <label class="form-label" for="state">State</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="country" id="country" required class="form-control required" placeholder="">
                                                <label class="form-label" for="country">Country</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="text" name="zipcode" id="zipcode" class="form-control required" required placeholder="">
                                                <label class="form-label" for="zipcode">Zipcode</label>
                                            </div>
                                        </div>
                                    </section>





                                    <hr>





                                    <!-- Educational Background -->
                                    <section class="educational-background">
                                        <h6 class="fw-bold mt-4">Educational Background</h6>
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label class="form-label">Highest Degree</label>
                                                <select class="form-select">
                                                    <option>Under Graduation</option>
                                                    <option>Graduation</option>
                                                    <option>Post Graduation</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Programme</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Grade Scale</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Test Scores -->
                                    <h6 class="fw-bold mt-4">Test Scores</h6>
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Exam Type</label>
                                            <select class="form-select">
                                                <option>IELTS</option>
                                                <option>TOEFL</option>
                                                <option>PTE</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Date of Exam</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Overall Score</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Listening Score</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Reading Score</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Writing Score</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Speaking Score</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Document Checklist -->
                                    <h6 class="fw-bold mt-4">Document Checklist</h6>
                                    <div class="upload-area border rounded p-4 text-center bg-light" id="uploadfile">
                                        <p class="mb-2">Drag and drop or <span
                                                class="text-primary fw-bold browse">browse</span> to upload <b>Transcript
                                                Certificate</b></p>
                                        <input type="file" class="d-none" id="fileInput" accept=".jpg,.png,.pdf">
                                        <small class="text-muted">Supports JPEG, PNG & PDF</small>
                                        <div id="preview" class="mt-3"></div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="d-flex justify-content-between mt-4">
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                        <div>
                                            <button type="button" class="btn btn-outline-primary me-2">Save
                                                changes</button>
                                            <button type="submit" class="btn btn-primary">Send to Advisor</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.form-floating input[required], .form-floating select[required], .form-floating textarea[required]')
                .each(function() {
                    let $label = $(this).siblings('label'); // ওই ইনপুটের লেবেল খুঁজে বের করো
                    if ($label.length && !$label.find('.required').length) {
                        $label.append(" <span class='required'>*</span>");
                    }
                });
        });
    </script>
@endpush
