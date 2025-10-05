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

                <div class="accordion" id="offerLetterAccordion" style="margin-top: 50px">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <div class="accordion-button title" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOfferLetter" aria-expanded="true"
                                aria-controls="collapseOfferLetter">
                                <div class="d-flex justify-content-between align-items-center w-100 gap-lg-4">
                                    <div>
                                        <h4>Offer Letters</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="collapseOfferLetter" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#offerLetterAccordion">
                            <div class="accordion-body">

                                {{-- @if ($authUser->course_interesteds->count() == 0)
                                    <div class="card bg-white mb-4">
                                        <div class="card-header text-secondary">
                                            <i class="bi bi-check-circle-fill"></i> No Offer Letter
                                        </div>
                                    </div>
                                @endif --}}
                                @foreach ($authUser->course_interesteds as $course)
                                    @php
                                        $Offer_granted = false;
                                        $courseStudent = App\Models\CourseStudent::where('course_id', $course->id)
                                            ->where('student_id', $authUser->id)
                                            ->first();
                                        // dd($courseStudent);
                                        if ($courseStudent->offer_letter_path != null) {
                                            $Offer_granted = true;
                                        }
                                    @endphp
                                    <div class="card bg-white mb-4">
                                        <div class="card-header {{ $Offer_granted ? 'text-success' : 'text-secondary' }} ">
                                            <i class="bi bi-check-circle-fill"></i> {{ $course->university->name ?? '' }}
                                            @if ($Offer_granted)
                                                <span class="badge bg-success uni-status-badge">Offer Granted</span>
                                            @else
                                                <span class="badge bg-warning text-dark uni-status-badge">
                                                    Under Review
                                                </span>
                                            @endif
                                        </div>
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="detail-label">Course Applied:</div>
                                                    {{ $course->name ?? '' }}
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="detail-label">Application Status:</div>
                                                    {{ $courseStudent->status ?? 'Under Review' }}
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="detail-label">Date Submitted:</div>
                                                    {{-- {{ \Carbon\Carbon::parse($courseStudent->created_at)->formatLocalized('%A, %d %B %Y') }} --}}
                                                    {{ \Carbon\Carbon::parse($courseStudent->created_at)->formatLocalized('%d %B %Y') }}
                                                </div>
                                            </div>
                                            {{-- <hr> --}}

                                            @if (isset($courseStudent) && isset($courseStudent->offer_letter_path))
                                                <div
                                                    class="offer-status-box alert-success mt-3 d-flex justify-content-between">
                                                    <div>
                                                        <i class="bi bi-file-earmark-pdf-fill"></i>
                                                        <strong>Offer Letter Available:</strong>
                                                        {{ $courseStudent->offer_letter_file_name ?? '' }}
                                                    </div>
                                                    <a href="{{ asset('/storage/' . $courseStudent->offer_letter_path) }}"
                                                        target="_blank" class="btn btn-sm btn-success ms-2">
                                                        <i class="bi bi-download"></i>
                                                        Download
                                                    </a>
                                                    {{-- <button class="btn btn-sm btn-danger ms-1 delete-offer-btn"
                                                        data-uni-id="UT-1001"><i class="bi bi-trash"></i> Remove</button> --}}
                                                </div>
                                                <hr>
                                                <!-- Upload Box -->
                                                <input type="file" id="fileInput" class="d-none"
                                                    accept=".jpeg,.jpg,.png,.pdf">
                                                <div class="upload-box mt-3" id="uploadBox">
                                                    <p>
                                                        <i class="bi bi-upload"></i>
                                                        Drag and drop or <span class="text-danger">browse</span> to upload
                                                        <b> Your Signed Documents</b>
                                                    </p>
                                                    <small class="text-muted">Supports JPEG, PNG & PDF</small>
                                                </div>
                                            @else
                                                <div class="offer-status-box alert-warning mt-3">
                                                    <i class="bi bi-exclamation-triangle-fill"></i>
                                                    <strong>No Offer Letter</strong> has been uploaded yet.
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

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
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush
