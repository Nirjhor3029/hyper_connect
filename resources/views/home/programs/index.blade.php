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


        /* Filter Styles */
        .accordion-body {
            max-height: 20vh;
            overflow: auto;
        }

        .filter-checkbox {
            margin-right: 1vw;
        }

        .filter-label {
            cursor: pointer;
        }

        #sortBy {
            border-radius: 50px;
            padding: 10px 24px;
        }

        .btn-eligibility {
            background-color: #fff;
            color: #FF4C61;
            border-radius: 50px;
            padding: 10px 24px;
            border: 1px solid #ddd;
        }

        .btn-eligibility:hover {
            background-color: #FF4C61;
            color: #fff;
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
                    @include('home.programs.filter', [
                        'countries' => $countries,
                        'universities' => $universities,
                        'programs' => $programs,
                    ])
                </div>



                <!-- Main Content -->
                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3>Programs</h3>
                        <div class="d-flex align-items-center">
                            <!-- Hidden Search Bar -->
                            <input type="text" class="form-control me-2 search-bar" placeholder="Search programs..."
                                style="padding: 5px 10px;">
                            {{-- <button class="btn btn-light me-2" id="toggleSearch">🔍</button> --}}
                            <img src="{{ asset('assets/home/icons/search_anything.svg') }}" class="me-2 cursor-pointer"
                                style="cursor: pointer" alt="Search Anything" id="toggleSearch">
                            <select class="form-select d-inline-block w-auto" id="sortBy">
                                <option>Sort by : Popular</option>
                                <option>Sort by : Fees</option>
                                <option>Sort by : Duration</option>
                            </select>
                            <button class="btn btn-eligibility ms-2">Check Eligibility</button>
                        </div>
                    </div>


                    {{-- University course or subject list --}}

                    <div class="" id="courseListContainer">
                        @include('home.programs.course_list', ['universities' => $universities])
                    </div>


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

@push('scripts')
    <script>
        $(document).ready(function() {

            // When any filter changes
            $('.filter-checkbox, #sortBy').on('change', function() {
                loadFilteredCourses();
            });

            function loadFilteredCourses() {
                // collect selected filters
                let countries = [];
                $('.country-checkbox:checked').each(function() {
                    countries.push($(this).val());
                });

                let universities = [];
                $('.university-checkbox:checked').each(function() {
                    universities.push($(this).val());
                });

                let sortBy = $('#sortBy').val();

                $.ajax({
                    url: '{{ route('programs.filter') }}',
                    type: 'GET',
                    data: {
                        countries: countries,
                        universities: universities,
                        sort_by: sortBy,
                    },
                    beforeSend: function() {
                        $('#courseListContainer').html(
                            '<div class="text-center py-5"><div class="spinner-border text-danger" role="status"></div><p>Loading...</p></div>'
                            );
                    },
                    success: function(response) {
                        $('#courseListContainer').html(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        alert('Something went wrong while loading programs.');
                    }
                });
            }

        });
    </script>
@endpush
