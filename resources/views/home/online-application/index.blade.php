@extends('layouts.home')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #ffffff);
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            max-width: 800px;
            background: #fff;
            margin: 50px auto;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-title h3 {
            font-weight: 600;
            color: #007bff;
        }

        label {
            font-weight: 500;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            border-radius: 8px !important;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-top: 30px;
            border-left: 4px solid #007bff;
            padding-left: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 10px;
            padding: 12px 25px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-check-label {
            font-weight: 400;
        }

        .upload-box {
            border: 2px dashed #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background: #f9f9f9;
            transition: 0.3s;
        }

        .upload-box:hover {
            border-color: #007bff;
            background: #f1f8ff;
        }

        .iti--separate-dial-code {
            width: 100%;
        }
    </style>
@endpush

@section('header')
    <!-- Top-Header-after-login -->
@endsection

@section('main_content')
    <!-- Main Content -->
    <div class="main-content">
        {{-- <div class="container-fluid"> --}}

        <div class="form-container">
            <div class="form-title">
                <h3>Online Application Form</h3>
                <p class="text-muted">
                    To get started, please fill up your personal information and have your passport-size photo, passport
                    copy, and academic results ready to upload.
                </p>
            </div>

            <form id="applicationForm" action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Personal Information --}}
                <div class="section-title">Personal Information</div>
                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <label>Type of Applicant *</label>
                        <select class="form-select" id="applicantType" name="applicantType" required>
                            <option value="">Select...</option>
                            <option value="malaysian">Malaysian</option>
                            <option value="international">International</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Email *</label>
                        <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
                    </div>
                    <div class="col-md-6">
                        <label>First Name *</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Your first name" required>
                    </div>
                    <div class="col-md-6">
                        <label>Last Name *</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Your last name" required>
                    </div>
                    <div class="col-md-6">
                        <label>Passport Number *</label>
                        <input type="text" class="form-control" name="passportNumber" placeholder="Passport number"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label>Student ID Number</label>
                        <input type="text" class="form-control" name="studentIdNumber"
                            placeholder="If you have studied with MAHSA before" required>
                    </div>
                    {{-- <div class="col-md-6">
                        <label>Phone *</label>
                        <input type="tel" class="form-control" placeholder="+60 123456789" required>
                    </div> --}}

                    <div class="col-md-6">
                        <label>Gender *</label>
                        <select class="form-select" name="gender" required>
                            <option value="">Select...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Marital Status</label>
                        <select class="form-select" name="marital">
                            <option value="">Select Any</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Religion</label>
                        <select class="form-select" name="religion">
                            <option value="{{ null }}">Select Any</option>
                            <option value="islam">Islam</option>
                            <option value="christianity">Christianity</option>
                            <option value="hinduism">Hinduism</option>
                            <option value="buddhism">Buddhism</option>
                            <option value="sikhism">Sikhism</option>
                            <option value="judaism">Judaism</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date of birth</label>
                        <input type="date" class="form-control" name="date_of_birth" required>
                    </div>
                </div>



                {{-- Contact Numbers --}}
                <div class="section-title">Contact Numbers</div>
                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Phone <span class="required">*</span></label>
                        <input id="phone" class="form-control" name="phone" required placeholder="1234 567 890" />
                        {{-- <div class="small-note mt-1">Select your country flag to change country code.</div> --}}
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Father's Phone Number</label>
                        <input id="fatherPhone" class="form-control" name="father_phone" required
                            placeholder="1234 567 890" />
                    </div>
                </div>


                {{-- Address Details --}}
                <div class="section-title">Address Details</div>
                <div class="row g-3 mt-2">
                    <div class="input-group col-md-12">
                        <input id="address"  type="text" class="form-control"
                            placeholder="Search address..." required>
                        <span class="input-group-text"
                            style="position: absolute;top: 0;right: 0;height: 100%;z-index: 10;"><i
                                class="fas fa-search"></i></span>
                    </div>
                    <div class="col-md-12">
                        <label>Street Address *</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>City *</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="col-md-6">
                        <label>State *</label>
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                    <div class="col-md-6">
                        <label>Country *</label>
                        <input type="text" class="form-control" id="country" name="country" required>
                    </div>
                    <div class="col-md-6">
                        <label>Postal code</label>
                        <input type="text" class="form-control" id="postal_code" name="postal_code">
                    </div>
                </div>

                <div class="section-title">Academic Information</div>
                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <label>Highest Qualification *</label>
                        <select class="form-select" name="highest_qualification" required>
                            <option value="">Select Any</option>
                            <option value="certificate">Certificate</option>
                            <option value="o_level">SPM/O-Level</option>
                            <option value="a_level">STPM/A-Level/Foundation/Pre-University</option>
                            <option value="high_school_diploma">High School Diploma</option>
                            <option value="diploma">Diploma</option>
                            <option value="higher_national_diploma">Higher National Diploma</option>
                            <option value="bachelors_degree">Bachelor's Degree</option>
                            <option value="post_graduate_certificate">Postgraduate Certificate</option>
                            <option value="post_graduate_diploma">Postgraduate Diploma</option>
                            <option value="masters">Master's</option>
                            <option value="phd">PHD</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Date of Award or Expected Graduation <span class="required">*</span></label>
                        <input type="date" name="graduation_date" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label>Name of Awarding Institution <span class="required">*</span></label>
                        <input type="text" name="awarding_institution" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label>Work Experience *</label>
                        <select class="form-select" name="work_experience" required>
                            <option value="">Select Any</option>
                            <option value="recent_graduate">Recent Graduate</option>
                            <option value="less_than_5_years">Less than 5 years</option>
                            <option value="at_least_5_years">At least 5 years</option>
                            <option value="at_least_10_years">At least 10 years</option>
                        </select>
                    </div>

                    {{-- <div class="col-md-6">
                        <label>Expected Graduation Year <span class="required">*</span></label>
                        <input type="number" class="form-control" placeholder="2025" required>
                    </div>
                    <div class="col-md-6">
                        <label>Program Applying For *</label>
                        <select class="form-select" required>
                            <option value="">Select...</option>
                            <option>Bachelor’s Program</option>
                            <option>Master’s Program</option>
                            <option>PhD Program</option>
                        </select>
                    </div> --}}
                </div>


                <div class="section-title">Apply Details</div>

                <div class="row g-3 mt-2">
                    <div class="col-md-12">
                        <label>Campus <span class="required">*</span></label>
                        <select class="form-select select2" required name="campus">
                            <option value="">Select Any</option>
                            @foreach ($universities as $id => $item)
                                <option value="{{ $id }}">
                                    {{ $item }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Intake <span class="required">*</span></label>
                        @php
                            $year = date('Y');
                        @endphp
                        <select class="form-select" name="intake" required>
                            <option value="">Select Any</option>
                            <option value="January {{ $year }}">January {{ $year }}</option>
                            <option value="April {{ $year }}">April {{ $year }}</option>
                            <option value="May {{ $year }}">May {{ $year }}</option>
                            <option value="August {{ $year }}">August {{ $year }}</option>
                            <option value="September {{ $year }}">September {{ $year }}</option>
                            <option value="October {{ $year }}">October {{ $year }}</option>
                            <option value="November {{ $year }}">November {{ $year }}</option>

                            <option value="January {{ $year + 1 }}">January {{ $year + 1 }}</option>
                            <option value="April {{ $year + 1 }}">April {{ $year + 1 }}</option>
                            <option value="May {{ $year + 1 }}">May {{ $year + 1 }}</option>
                            <option value="August {{ $year + 1 }}">August {{ $year + 1 }}</option>
                            <option value="September {{ $year + 1 }}">September {{ $year + 1 }}</option>
                            <option value="October {{ $year + 1 }}">October {{ $year + 1 }}</option>
                            <option value="November {{ $year + 1 }}">November {{ $year + 1 }}</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label>Type of Study <span class="required">*</span></label>
                        <select class="form-select" name="study_type" required>
                            <option value="">Select Any</option>
                            <option value="Undergraduate Programmes - Full Time">Undergraduate Programmes - Full Time
                            </option>
                            <option value="Postgraduate Programmes - Full Time">Postgraduate Programmes - Full Time
                            </option>
                            <option value="Postgraduate Programmes - Research">Postgraduate Programmes - Research</option>
                            <option value="Open & Distance Learning Programmes">Open & Distance Learning Programmes
                            </option>

                            <option value="Part Time Programmes">Part Time Programmes</option>
                            <option value="APEL">APEL</option>
                            <option value="Micro-credentials">Micro-credentials</option>

                        </select>
                    </div>

                    <div class="col-md-12">
                        <label>Sponsorships and Loan</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="checkbox" id="self-funded" name="sponsorships" value="Self-funded">
                                <label class="form-check-label" style="cursor: pointer" for="self-funded"
                                    style="">Self Funded</label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="ptptn" name="sponsorships" value="PTPTN">
                                <label class="form-check-label" style="cursor: pointer" for="ptptn"
                                    style="">PTPTN</label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="MARA" name="sponsorships" value="MARA">
                                <label class="form-check-label" style="cursor: pointer" for="MARA"
                                    style="">MARA</label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="ZAKAT" name="sponsorships" value="ZAKAT">
                                <label class="form-check-label" style="cursor: pointer" for="ZAKAT"
                                    style="">ZAKAT</label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="JPA" name="sponsorships" value="JPA">
                                <label class="form-check-label" style="cursor: pointer" for="JPA"
                                    style="">JPA</label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="EPF" name="sponsorships" value="EPF">
                                <label class="form-check-label" style="cursor: pointer" for="EPF"
                                    style="">EPF</label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="bank-loan" name="sponsorships" value="Bank Loan">
                                <label class="form-check-label" style="cursor: pointer" for="bank-loan"
                                    style="">Bank Loan</label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" id="hospital-sponsorship" name="sponsorships"
                                    value="Hospital (Nursing Sponsorship)">
                                <label class="form-check-label" style="cursor: pointer" for="hospital-sponsorship"
                                    style="">Hospital (Nursing Sponsorship)</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="external_scholarships">External Scholarships</label>
                        <input type="text" class="form-control" id="external_scholarships"
                            name="external_scholarships" placeholder="Please Specify">
                    </div>
                </div>


                <div class="section-title">File Uploads</div>
                <div class="row g-3 mt-2">
                    <!-- Photo -->
                    <div class="col-md-12">
                        <label class="form-label">Photo <span class="required">*</span></label>
                        <div class="upload-box">
                            <input id="photoInput" accept="image/*" type="file" class="form-control" name="photo" required>
                            <img id="photoPreview" class="photo-preview d-none" alt="Photo preview" style="height: 100px">
                            <div class="small-note mt-2">Passport-size photo recommended (JPG/PNG). Max 2MB.</div>
                        </div>
                    </div>

                    <!-- Passport/NRIC -->
                    <div class="col-md-12">
                        <label class="form-label">Passport / NRIC copy <span class="required">*</span></label>
                        <div class="upload-box">
                            <input id="idUpload" type="file" accept="image/*,application/pdf" name="passport_copy" class="form-control"
                                required>
                            <div id="idFileName" class="file-list small-note"></div>
                        </div>
                    </div>

                    <!-- English proficiency -->
                    <div class="col-md-12">
                        <label class="form-label">English Proficiency Transcripts </label>
                        <div class="upload-box">
                            <input id="engUpload" type="file" accept="image/*,application/pdf" name="english_transcript" class="form-control">
                            <div id="engFileName" class="file-list small-note"></div>
                        </div>
                    </div>

                    <!-- Academic results (allow multiple) -->
                    <div class="col-12">
                        <label class="form-label">Academic Results <span class="required">*</span></label>
                        <div class="upload-box">
                            <input id="resultsUpload" type="file" multiple accept="image/*,application/pdf"
                                class="form-control" name="academic_results[]" required>
                            <div id="resultsList" class="file-list small-note"></div>
                            <div class="small-note mt-2">You can upload multiple files (transcript, certificates). Max 7
                                files.</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </div>
            </form>
        </div>

        {{-- </div> --}}
    </div>
@endsection


@push('scripts')
    <!-- jQuery + Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- intl-tel-input JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- utils (optional) for formatting/validation) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_PLACES_API_KEY') }}&libraries=places"></script>


    <script>
        $(function() {
            // Initialize intl-tel-input on the two phone inputs (flags + country)
            var phoneInput = document.querySelector('#phone');
            var fatherInput = document.querySelector('#fatherPhone');

            var itiPhone = window.intlTelInput(phoneInput, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                initialCountry: "auto",
                geoIpLookup: function(success, failure) {
                    // best-effort: skip actual geo lookup (CORS). We'll default to 'auto' fallback.
                    success("us");
                },
                separateDialCode: true,
                preferredCountries: ["my", "sg", "ae", "us", "gb"]
            });

            var itiFather = window.intlTelInput(fatherInput, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                initialCountry: "auto",
                separateDialCode: true,
                preferredCountries: ["my", "sg", "bd", "pk", "in", "gb", "us"]
            });

            // Photo preview logic
            const MAX_PHOTO_MB = 5;
            $("#photoInput").on('change', function(e) {
                const file = this.files[0];
                const $preview = $("#photoPreview");

                if (!file) {
                    $preview.addClass('d-none').attr('src', '');
                    return;
                }

                if (file.size > MAX_PHOTO_MB * 1024 * 1024) {
                    alert('Photo is too large. Max ' + MAX_PHOTO_MB + 'MB.');
                    $(this).val('');
                    $preview.addClass('d-none').attr('src', '');
                    return;
                }

                if (!file.type.startsWith('image/')) {
                    alert('Please upload a valid image file for the photo.');
                    $(this).val('');
                    $preview.addClass('d-none').attr('src', '');
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(ev) {
                    $preview.attr('src', ev.target.result).removeClass('d-none');
                };
                reader.readAsDataURL(file);
            });

            // show filenames for single-file upload fields
            $("#idUpload").on('change', function() {
                const file = this.files[0];
                $("#idFileName").text(file ? file.name : '');
            });

            $("#engUpload").on('change', function() {
                const file = this.files[0];
                $("#engFileName").text(file ? file.name : '');
            });

            // Academic results (multiple)
            $("#resultsUpload").on('change', function() {
                const files = Array.from(this.files).slice(0, 7); // limit preview count
                if (files.length > 7) {
                    alert('You can upload up to 7 files. Only first 7 will be considered.');
                }
                const list = files.map(f =>
                    `<div>• ${f.name} <small class="text-muted">(${Math.round(f.size/1024)} KB)</small></div>`
                ).join('');
                $("#resultsList").html(list);
            });

            // Form submit (demo)
            // $("#applicationForm").on('submit', function(e) {
            //     e.preventDefault();
            //     // quick validation for phone fields using intl-tel-input (optional)
            //     var phoneValid = itiPhone.isValidNumber();
            //     var fatherValid = itiFather.isValidNumber();

            //     if (!phoneValid) {
            //         alert('Please enter a valid Phone number (select correct country code).');
            //         phoneInput.focus();
            //         return;
            //     }
            //     if (!fatherValid) {
            //         alert("Please enter a valid Father's Phone number.");
            //         fatherInput.focus();
            //         return;
            //     }

            //     // collect form data for preview (for demo; here we won't actually send)
            //     var payload = new FormData(this);

            //     // override raw phone values with full international format (E.164)
            //     payload.set('phone', itiPhone.getNumber());
            //     payload.set('father_phone', itiFather.getNumber());

            //     // For demo, we show a small summary modal or alert
            //     let name = payload.get('full_name') || 'Applicant';
            //     alert("Thank you, " + name +
            //         ". Your form is validated locally. (This demo doesn't upload to a server.)");

            //     // TODO: You can send `payload` to server via AJAX:
            //     // $.ajax({ url:'/upload', method:'POST', data: payload, contentType:false, processData:false, success:... })
            // });

            // Reset handler: clear previews & intl-tel-inputs
            $("#btnReset").on('click', function() {
                $("#photoPreview").addClass('d-none').attr('src', '');
                $("#idFileName, #engFileName, #resultsList").empty();
                itiPhone.setNumber("");
                itiFather.setNumber("");
            });

        });
    </script>

    <script>
        $(function() {
            // Initialize Google Places Autocomplete
            function initAutocomplete() {
                var input = document.getElementById('address');
                if (!input) return;

                var autocomplete = new google.maps.places.Autocomplete(input, {
                    types: ['geocode'], // You can use ['(cities)'] for city-only
                    componentRestrictions: {
                        country: ["bd", "my", "us"]
                    } // restrict to specific countries if needed
                });

                autocomplete.addListener('place_changed', function() {
                    var place = autocomplete.getPlace();
                    console.log(place); // See full address details
                });


                autocomplete.addListener('place_changed', function() {
                    var place = autocomplete.getPlace();

                    console.log(place);

                    // Example: extract components
                    let postal = '',
                        city = '',
                        state = '',
                        country = '';
                    place.address_components.forEach(function(component) {
                        const types = component.types;
                        if (types.includes('postal_code')) postal = component.long_name;
                        if (types.includes('locality')) city = component.long_name;
                        if (types.includes('administrative_area_level_1')) state = component
                            .long_name;
                        if (types.includes('country')) country = component.long_name;
                    });

                    console.log({
                        postal,
                        city,
                        state,
                        country
                    });

                    // Optionally fill other form fields
                    $('#postal_code').val(postal);
                    $('#city').val(city);
                    $('#state').val(state);
                    $('#country').val(country);
                });
            }

            // Load after Google script
            if (typeof google !== 'undefined') {
                initAutocomplete();
            } else {
                console.error('Google Maps script not loaded!');
            }



        });
    </script>

    <script>
        $(document).ready(function() {
            $("#applicationForm").on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('application.store') }}",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        alert(res.message);
                        $("#applicationForm")[0].reset();
                    },
                    error: function(err) {
                        console.log(err.responseJSON);
                        alert("Something went wrong. Please check your input.");
                    }
                });
            });

        });
    </script>
@endpush
