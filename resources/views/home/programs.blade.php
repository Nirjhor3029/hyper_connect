@extends('layouts.home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/home/css/programs.css') }}">
    <style>
        .top_header_after_login .dropdown-toggle::after {
            content: none !important;
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

                    <!-- Example Program Card -->
                    <div class="program-card">
                        <h5>Asia Pacific University (APU)</h5>
                        <div class="border p-3 rounded mb-2">
                            <h6>Master of Science in Computing</h6>
                            <div class="program-meta">Open: Jan 22 | Closed: May 22</div>
                            <div class="row mt-2">
                                <div class="col-md-2">RM 00000 <br><small>Total Fee</small></div>
                                <div class="col-md-2">00 Months <br><small>Duration</small></div>
                                <div class="col-md-2">70 <br><small>IELTS/MOI</small></div>
                                <div class="col-md-2">70% <br><small>Min GPA</small></div>
                                <div class="col-md-4 text-end">
                                    <button class="btn btn-outline-primary btn-sm">Check Eligibility</button>
                                    <button class="btn btn-primary btn-sm">Apply Now</button>
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
    <script>
        $(document).ready(function() {
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
