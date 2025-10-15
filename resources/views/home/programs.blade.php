@extends('layouts.home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/home/css/programs.css') }}">
    <style>
        .top_header_after_login .dropdown-toggle::after {
            content: none !important;
        }

        .university-logo {
            /* width: 40px; */
            height: 40px;
            object-fit: contain;
            margin-right: 10px;
            vertical-align: middle;
        }

        .bg-gray-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ECECEB;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
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


            <div class="row">






                <!-- programs-leftbar -->
                <div class="col-lg-3 mb-3">
                    <button class="btn btn-outline-primary w-100 filter-toggle">Show Filters</button>
                    <div class="programs-leftbar">
                        <h6 class="d-flex justify-content-between">
                            Filter by <a href="#" class="text-danger small">Reset</a>
                        </h6>
                        <hr>

                        <!-- Accordion programs-leftbar -->
                        <div class="accordion" id="filterAccordion">

                            <!-- Country -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingCountry">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCountry">
                                        Country
                                    </button>
                                </h2>
                                <div id="collapseCountry" class="accordion-collapse collapse show"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div><input type="checkbox" checked> Malaysia</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Institutes with search -->
                            <div class="accordion-item">
                                <h2 class="accordion-header d-flex justify-content-between align-items-center"
                                    id="headingInstitutes">
                                    <button class="accordion-button collapsed flex-grow-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseInstitutes">
                                        Institutes
                                    </button>
                                    <button class="btn btn-sm btn-light ms-2" id="toggleInstituteSearch">
                                        🔍
                                    </button>
                                </h2>
                                <div id="collapseInstitutes" class="accordion-collapse collapse show"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <!-- Search inside institutes -->
                                        <input type="text" class="form-control form-control-sm search-institutes"
                                            placeholder="Search institutes...">
                                        <div class="mt-2">
                                            <div><input type="checkbox"> Asia Pacific University</div>
                                            <div><input type="checkbox"> Taylor’s University</div>
                                            <div><input type="checkbox"> Sunway University</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Programs -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingPrograms">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePrograms">
                                        Programs
                                    </button>
                                </h2>
                                <div id="collapsePrograms" class="accordion-collapse collapse"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div><input type="checkbox"> Business</div>
                                        <div><input type="checkbox"> Engineering</div>
                                        <div><input type="checkbox"> IT</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tuition Fees -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFees">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFees">
                                        Tuition Fees
                                    </button>
                                </h2>
                                <div id="collapseFees" class="accordion-collapse collapse"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div><input type="checkbox"> $0 - $1000</div>
                                        <div><input type="checkbox"> $1000 - $5000</div>
                                        <div><input type="checkbox"> $5000+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Intake Date -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingIntake">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseIntake">
                                        Intake Date
                                    </button>
                                </h2>
                                <div id="collapseIntake" class="accordion-collapse collapse"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div><input type="checkbox"> Jan 2025</div>
                                        <div><input type="checkbox"> May 2025</div>
                                        <div><input type="checkbox"> Sep 2025</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Province -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingProvince">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseProvince">
                                        Province
                                    </button>
                                </h2>
                                <div id="collapseProvince" class="accordion-collapse collapse"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div><input type="checkbox"> Kuala Lumpur</div>
                                        <div><input type="checkbox"> Selangor</div>
                                        <div><input type="checkbox"> Penang</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>







                <!-- Main Content -->
                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3>Programs</h3>
                        <div class="d-flex align-items-center">
                            <!-- Hidden Search Bar -->
                            <input type="text" class="form-control me-2 search-bar" placeholder="Search programs...">
                            <button class="btn btn-light me-2" id="toggleSearch">🔍</button>
                            <select class="form-select d-inline-block w-auto">
                                <option>Sort by : Popular</option>
                                <option>Sort by : Fees</option>
                                <option>Sort by : Duration</option>
                            </select>
                            <button class="btn btn-danger ms-2">Check Eligibility</button>
                        </div>
                    </div>


                    @foreach ($universities as $university)
                        @if ($university->universityCourses->count() > 0)
                            <div class="university-card-item">
                                <h5>
                                    <img class="university-logo" src="{{ $university->logo->getUrl() }}"
                                        alt="{{ $university->name }}">
                                    {{ $university->name }}
                                    @if ($university->code)
                                        ({{ $university->code }})
                                    @endif
                                </h5>

                                @foreach ($university->universityCourses as $course)
                                    <div class="card program-card">
                                        <div class="card-body">
                                            {{-- <div class="border p-3 rounded mb-2"> --}}
                                            <div class="d-flex align-items-center justify-content-between course-info">
                                                <div>
                                                    <h6 class="program-title">{{ $course->name }}</h6>
                                                    <div class="program-meta d-flex">
                                                        <div class="program-date-container-open"
                                                            style="border-right: 1px solid #ccc;">
                                                            Open:
                                                            <span class="date">
                                                                {{ \Carbon\Carbon::parse($course->opening_date)->format('M d') }}
                                                            </span>
                                                        </div>
                                                        <div class="program-date-container-close">
                                                            Closed:
                                                            <span class="date">
                                                                {{ \Carbon\Carbon::parse($course->closing_date)->format('M d') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                @php
                                                    $applied = false;
                                                    if (Auth::guard('student')->user()) {
                                                        $authUserId = Auth::guard('student')->user()->id;
                                                        $courseStudents = $course->courseStudents;
                                                        // dd($courseStudents);

                                                        $courseStudentIds = $courseStudents->pluck('id')->toArray();
                                                        // dd($courseStudentIds);

                                                        if (in_array($authUserId, $courseStudentIds)) {
                                                            $applied = true;
                                                        }
                                                    }

                                                @endphp

                                                @if (!$applied)
                                                    <div class="col-md-4 text-end actions">
                                                        <button class="btn btn-nd btn-round btn-not-primary"
                                                            id="bookmarkBtn" data-action="bookmark">
                                                            <i class="fa-regular fa-bookmark"></i>
                                                            {{-- <i class="fa-solid fa-bookmark"></i> --}}
                                                        </button>
                                                        <button class="btn btn-md btn-round btn-not-primary"
                                                            id="checkEligibilityBtn" type="button"
                                                            data-action="checkEligibility">
                                                            Check Eligibility
                                                        </button>
                                                        <button class="btn btn-primary btn-md btn-round btn-apply"
                                                            id="applyBtn" type="button"
                                                            data-program-id={{ $course->id }} data-action="applyNow">
                                                            Apply Now
                                                        </button>

                                                    </div>
                                                @endif

                                                <span class="applied_message"
                                                    style="display: {{ !$applied ? 'none' : 'block' }};">Applied</span>

                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex mt-2 gap-5">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bg-gray-circle">
                                                            <img src="{{ asset('assets/images/rm_image_130.svg') }}"
                                                                alt="" srcset="">
                                                        </div>
                                                        <div>
                                                            <strong><span class="">RM</span>
                                                                {{ $course->total_fees }}</strong> <br>
                                                            <small class="text-secondary">Total tuition Fee</small>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $year_fees = $course->year_fees;
                                                        $year_fees = json_decode($year_fees, true);
                                                        // echo $year_fees['1st_year_fees'];
                                                    @endphp
                                                    @if (isset($year_fees['1st_year_fees']))
                                                        <div class="d-flex align-items-center">
                                                            <div class="bg-gray-circle">
                                                                <img src="{{ asset('assets/images/rm_image_130.svg') }}"
                                                                    alt="" srcset="">
                                                            </div>
                                                            <div>
                                                                <strong><span class="">RM</span>
                                                                    {{ $year_fees['1st_year_fees'] }}</strong> <br>
                                                                <small class="text-secondary">First year tuition
                                                                    Fee</small>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if (isset($year_fees['2nd_year_fees']))
                                                        <div class="d-flex align-items-center">
                                                            <div class="bg-gray-circle">
                                                                <img src="{{ asset('assets/images/rm_image_130.svg') }}"
                                                                    alt="" srcset="">
                                                            </div>
                                                            <div>
                                                                <strong><span class="">RM</span>
                                                                    {{ $year_fees['2nd_year_fees'] }}</strong> <br>
                                                                <small class="text-secondary">Second year tuition
                                                                    Fee</small>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if (isset($year_fees['3rd_year_fees']))
                                                        <div class="d-flex align-items-center">
                                                            <div class="bg-gray-circle">
                                                                <img src="{{ asset('assets/images/rm_image_130.svg') }}"
                                                                    alt="" srcset="">
                                                            </div>
                                                            <div>
                                                                <strong><span class="">RM</span>
                                                                    {{ $year_fees['3rd_year_fees'] }}</strong> <br>
                                                                <small class="text-secondary">Third year tuition
                                                                    Fee</small>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if (isset($year_fees['4th_year_fees']))
                                                        <div class="d-flex align-items-center">
                                                            <div class="bg-gray-circle">
                                                                <img src="{{ asset('assets/images/rm_image_130.svg') }}"
                                                                    alt="" srcset="">
                                                            </div>
                                                            <div>
                                                                <strong><span class="">RM</span>
                                                                    {{ $year_fees['4th_year_fees'] }}</strong> <br>
                                                                <small class="text-secondary">Fourth year tuition
                                                                    Fee</small>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class='bg-gray-circle'>
                                                        <img src="{{ asset('assets/home/icons/calendar.svg') }}"
                                                            alt="" srcset="">
                                                    </div>
                                                    <div>
                                                        <strong>{{ $course->duration }} months</strong> <br>
                                                        <small class="text-secondary">Duration</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </div>


    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            // Handle button clicks
            $("#bookmarkBtn, #checkEligibilityBtn, #applyBtn").click(function(e) {
                    e.preventDefault();

                    var action = $(this).data('action'); // Get the action from data-attribute

                    // Check if the user is logged in using Laravel's built-in auth() helper
                    @auth
                    // User is logged in, perform the respective action
                    if (action === 'applyNow') {
                        // Your Apply Now logic here
                        // alert('Proceeding with the application...');
                        var programId = $(this).data('program-id'); // Get program ID
                        var button = $(this); // Store the button for later manipulation

                        // Disable the button to prevent multiple clicks
                        button.prop('disabled', true);

                        // Send the AJAX request
                        $.ajax({
                            url: '{{ route('student.application.form.applyProgram') }}', // Your Laravel route for handling application
                            type: 'POST',
                            data: {
                                program_id: programId, // Send the program ID
                                _token: '{{ csrf_token() }}' // CSRF token for security
                            },
                            success: function(response) {
                                // On success, change the button to "Applied"
                                button.closest('.actions').hide(); // Hide the Apply button
                                button.closest('.course-info').find('.applied_message')
                                    .show(); // Show "Applied" text
                            },
                            error: function(xhr, status, error) {
                                // On error, enable the button again
                                button.prop('disabled', false);
                                alert('Something went wrong. Please try again.');
                                console.log(error);

                            }
                        });
                    } else if (action === 'checkEligibility') {
                        // Your Check Eligibility logic here
                        alert('Checking eligibility...');
                    } else if (action === 'bookmark') {
                        // Your Bookmark logic here
                        alert('Bookmarking...');
                    }
                @else
                    // User is not logged in, prompt them to sign in
                    // Redirect to login page
                    //alert('You need to sign in first!');
                    //window.location.href = '{{ route('login') }}';
                    Swal.fire({
                        icon: 'warning',
                        title: 'You are not signed in!',
                        text: 'Please log in to apply for this program.',
                        confirmButtonText: 'Sign In',
                        showCancelButton: true,
                        cancelButtonText: 'Cancel',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to login page if user clicks "Sign In"
                            window.location.href = '{{ route('login') }}';
                        }
                    });
                @endauth
            });


        // programs-leftbar toggle
        $(".filter-toggle").click(function() {
            $(".programs-leftbar").slideToggle();
        });

        // Top search toggle
        $("#toggleSearch").click(function() {
            $(".search-bar").fadeToggle().focus();
        });

        // Institutes search toggle
        $("#toggleInstituteSearch").click(function() {
            $(".search-institutes").slideToggle().focus();
        });


        });
    </script>
@endpush
