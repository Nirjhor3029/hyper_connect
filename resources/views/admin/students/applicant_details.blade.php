@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/cdns/bootstrap-5.3.3.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/cdns/bootstrap-icons@1.11.3.min.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: 20px;
        }

        /* Custom styles for accordion headers */
        .accordion-button {
            /* background-color: #e9ecef !important; */
            background-color: #fff !important font-weight: 600;
        }

        .accordion-button:not(.collapsed) {
            color: #0d6efd;
            background-color: #e7f1ff !important;
            box-shadow: none;
        }

        .accordion-item {
            margin-bottom: 10px;
            border-radius: 0.5rem;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.03);
        }

        .detail-item {
            padding: 0.5rem 0;
        }

        .detail-label {
            font-weight: 500;
            color: #6c757d;
        }

        .document-list-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
        }

        .document-list-item:last-child {
            border-bottom: none;
        }

        .file-name {
            font-weight: 500;
            display: block;
        }

        .file-status {
            font-size: 0.85rem;
            font-style: italic;
        }
    </style>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: 20px;
        }

        /* Accordion Styling */
        /* .accordion-button {
                                                                                                                                                                                                            background-color: #e9ecef !important;
                                                                                                                                                                                                            font-weight: 600;
                                                                                                                                                                                                        } */

        /* .accordion-button:not(.collapsed) {
                                                                                                                                                                                                            color: #0d6efd;
                                                                                                                                                                                                            background-color: #e7f1ff !important;
                                                                                                                                                                                                            box-shadow: none;
                                                                                                                                                                                                        } */

        /* .accordion-item {
                                                                                                                                                                                                            margin-bottom: 10px;
                                                                                                                                                                                                            border-radius: 0.5rem;
                                                                                                                                                                                                            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.03);
                                                                                                                                                                                                        } */

        .detail-label {
            font-weight: 500;
            color: #6c757d;
        }

        /* University Card Styling */
        .uni-card {
            border: 1px solid #dee2e6;
            margin-bottom: 15px;
            border-radius: 0.5rem;
        }

        .uni-card-header {
            background-color: #f1f4f9;
            padding: 10px 15px;
            font-weight: 700;
            border-bottom: 1px solid #dee2e6;
        }

        .uni-status-badge {
            font-size: 0.8rem;
            margin-left: 10px;
        }

        /* Offer Letter Status */
        .offer-status-box {
            padding: 10px;
            border-radius: 5px;
            font-size: 0.9rem;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4 text-primary">
            <i class="bi bi-person-lines-fill me-2"></i>
            Application Details: {{ $applicant->name ?? $applicant->first_name }}
        </h1>

        <div class="d-flex justify-content-end mb-4">
            {{-- <button class="btn btn-success me-2"><i class="bi bi-check-circle-fill"></i> Approve Application</button>
            <button class="btn btn-danger me-2"><i class="bi bi-x-circle-fill"></i> Reject Application</button>
            <button class="btn btn-outline-secondary"><i class="bi bi-pencil-square"></i> Edit Details</button> --}}
        </div>

        <div class="accordion" id="applicationAccordion">


            {{-- Personal Information: show --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <i class="bi bi-person-fill me-2"></i> Personal Information
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                    {{-- data-bs-parent="#applicationAccordion"> --}}
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Full Name:</div> {{ $applicant->name ?? $applicant->first_name }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Date of Birth:</div> {{ $applicant->dob ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Gender:</div> {{ $applicant->gender ?? 'N/A' }}
                            </div>

                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Nationality:</div> {{ $applicant->nationality ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Passport Number:</div> {{ $applicant->passport_no ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Marital Status:</div> {{ $applicant->marital_status ?? 'N/A' }}
                            </div>

                            <hr>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Email:</div> {{ $applicant->email ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Primary Mobile:</div>
                                {{-- +880 1685262326 --}}
                                {{ $applicant->phone ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Alternate Mobile:</div> {{ $applicant->alt_phone ?? 'N/A' }}
                            </div>


                            <hr>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">City/District:</div> {{ $applicant->city ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Country:</div> {{ $applicant->country ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Zipcode:</div> {{ $applicant->zipcode ?? 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            {{-- Educational Background: hide --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="bi bi-book-fill me-2"></i> Educational Background
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    {{-- data-bs-parent="#applicationAccordion"> --}}
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Level:</div>
                                {{ $student_highest_education_level->title ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Program:</div>
                                {{ $student_highest_education_level->pivot->program ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Grade/GPA:</div>
                                {{ $student_highest_education_level->pivot->grade ?? 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            {{-- Test Scores: Hide --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="bi bi-file-earmark-check-fill me-2"></i> Test Scores (IELTS/TOFEL/PTE/MOI)
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    {{-- data-bs-parent="#applicationAccordion"> --}}
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Exam:</div> {{ $test->exam_type ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Date of Exam:</div> {{ $test->exam_date ?? 'N/A' }}
                            </div>
                            <div class="col-md-4 detail-item">
                                <div class="detail-label">Overall Score:</div> {{ $test->overall_score ?? 'N/A' }}
                            </div>

                            <hr>

                            <div class="col-md-3 detail-item">
                                <div class="detail-label">Listening Score:</div> {{ $test->listening_score ?? 'N/A' }}
                            </div>
                            <div class="col-md-3 detail-item">
                                <div class="detail-label">Reading Score:</div> {{ $test->reading_score ?? 'N/A' }}
                            </div>
                            <div class="col-md-3 detail-item">
                                <div class="detail-label">Writing Score:</div> {{ $test->writing_score ?? 'N/A' }}
                            </div>
                            <div class="col-md-3 detail-item">
                                <div class="detail-label">Speaking Score:</div> {{ $test->speaking_score ?? 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            {{-- Documents and Attachments: hide --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="bi bi-folder-fill me-2"></i>
                        Documents and Attachments
                        @if (count($uploads) > 0)
                            (Total: {{ count($uploads) }})
                        @endif
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour">
                    {{-- data-bs-parent="#applicationAccordion"> --}}
                    <div class="accordion-body">
                        <h4>Application Attachments </h4>
                        <p class="text-muted small">Review and approve/reject student-provided documents.</p>


                        @foreach ($uploads as $item)
                            <div class="document-list-item bg-light p-2 rounded mb-2" data-id="{{ $item->id }}"
                                id="file-{{ $item->id }}">
                                <div class="document_details">
                                    <span class="file-name">{{ $item->file_custom_name }}</span>

                                    @php
                                        $file_status = '';
                                        $badge_class = '';
                                        $statusReason = '';
                                        $statusIconClass = '';
                                        switch ($item->file_status) {
                                            case 'approved':
                                                $file_status = 'Approved';
                                                $badge_class = 'bg-success';
                                                $statusIconClass = 'bi-check-circle';
                                                break;
                                            case 'rejected':
                                                $file_status = 'Rejected';
                                                $badge_class = 'bg-danger';
                                                $statusIconClass = 'bi-x-circle';
                                                $statusReason = $item->admin_comment;
                                                break;
                                            default:
                                                // $file_status: Uploaded
                                                $file_status = 'Pending Review';
                                                $badge_class = 'bg-warning';
                                                $statusIconClass = 'bi-clock';
                                        }
                                    @endphp
                                    <span class="badge {{ $badge_class }} file-status">
                                        <i class="bi {{ $statusIconClass }}"></i>
                                        {{ $file_status }}
                                    </span>
                                    @if ($statusReason !== '')
                                        <small class="d-block text-danger">Reason: {{ $statusReason }}</small>
                                    @endif

                                    {{-- @if ($item->file_status == 'approved')
                                        <span class="badge bg-success file-status">
                                            <i class="bi bi-check-circle"></i>
                                            Approved
                                        </span>
                                    @elseif ($item->file_status == 'rejected')
                                    @else
                                        <span class="badge bg-warning text-dark file-status">
                                            <i class="bi bi-clock"></i>
                                            Pending Review
                                        </span>
                                    @endif --}}

                                </div>
                                <div class="btn-group" role="group">
                                    <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank"
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-download"></i>
                                        View
                                    </a>
                                    @if ($file_status != 'Approved')
                                        <button type="button" class="btn btn-sm btn-success btn-approve me-1"><i
                                                class="bi bi-check-circle"></i> Approve</button>
                                    @endif

                                    @if ($file_status != 'Rejected')
                                        <button type="button" class="btn btn-sm btn-danger reject-btn">
                                            <i class="bi bi-x-circle"></i>
                                            Reject
                                        </button>
                                    @endif
                                </div>
                            </div>
                        @endforeach


                        {{-- <div class="document-list-item bg-light p-2 rounded mb-2">
                            <div>
                                <span class="file-name">Necter.job.pdf (CV/Resume)</span>
                                <span class="badge bg-success file-status"><i class="bi bi-check-circle"></i>
                                    Approved</span>
                            </div>
                            <div class="btn-group" role="group">
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i>
                                    View</a>
                                <button type="button" class="btn btn-sm btn-danger reject-btn">
                                    <i class="bi bi-x-circle"></i>
                                    Reject
                                </button>
                            </div>
                        </div>

                        <div class="document-list-item bg-light p-2 rounded mb-2">
                            <div>
                                <span class="file-name">cprogramming_tutorial.pdf (Academic Transcript)</span>
                                <span class="badge bg-warning text-dark file-status"><i class="bi bi-clock"></i> Pending
                                    Review</span>
                            </div>
                            <div class="btn-group" role="group">
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i>
                                    View</a>
                                <button type="button" class="btn btn-sm btn-success me-1"><i
                                        class="bi bi-check-circle"></i> Approve</button>
                                <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-x-circle"></i>
                                    Reject</button>
                            </div>
                        </div>

                        <div class="document-list-item bg-light p-2 rounded mb-2">
                            <div>
                                <span class="file-name">OldDegree.jpg (Degree Certificate)</span>
                                <span class="badge bg-danger file-status"><i class="bi bi-x-circle"></i> Rejected</span>
                                <small class="d-block text-danger">Reason: Low resolution copy.</small>
                            </div>
                            <div class="btn-group" role="group">
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i>
                                    View</a>
                                <button type="button" class="btn btn-sm btn-success"><i class="bi bi-check-circle"></i>
                                    Approve</button>
                            </div>
                        </div> --}}

                        {{-- <hr class="mt-4 mb-4">

                        <h4>Offer Letter Management</h4>
                        <div class="card p-3 bg-light border-success">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="offerLetterFile" class="form-label">Upload Offer Letter File</label>
                                    <form id="offerLetterForm" action="/admin/upload-offer-letter/{{ $applicant->id }}"
                                        method="POST" enctype="multipart/form-data">
                                        <input type="file" class="form-control" id="offerLetterFile"
                                            name="offer_letter" accept=".pdf,.doc,.docx" required>
                                        <button type="submit" class="btn btn-success mt-2 w-100" id="uploadBtn">
                                            <i class="bi bi-upload"></i> Upload Letter
                                        </button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Current Offer Letter Status:</label>
                                    <div class="alert alert-info p-2 small" id="currentOfferStatus">
                                        <i class="bi bi-info-circle-fill"></i> No Offer Letter currently uploaded.
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>



            {{-- University Applications: show --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        <i class="bi bi-building-fill me-2"></i> University Applications
                        @if ($applicant->course_interesteds->count() > 0)
                            (Total: {{ $applicant->course_interesteds->count() }}) 🏫
                        @endif
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive">
                    {{-- data-bs-parent="#applicationAccordion"> --}}
                    <div class="accordion-body">

                        @foreach ($applicant->course_interesteds as $course)
                            @php
                                $Offer_granted = false;
                                $courseStudent = App\Models\CourseStudent::where('course_id', $course->id)
                                    ->where('student_id', $applicant->id)
                                    ->first();
                                // dd($courseStudent);
                                if ($courseStudent->offer_letter_path != null) {
                                    $Offer_granted = true;
                                }
                            @endphp
                            <div class="uni-card bg-white">
                                <div class="uni-card-header {{ $Offer_granted ? 'text-success' : 'text-secondary' }} ">
                                    <i class="bi bi-check-circle-fill"></i> {{ $course->university->name ?? '' }}
                                    @if ($Offer_granted)
                                        <span class="badge bg-success uni-status-badge">Offer Granted</span>
                                    @else
                                        <span class="badge bg-warning text-dark uni-status-badge">Under Review</span>
                                    @endif
                                </div>
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="detail-label">Course Applied:</div> {{ $course->name ?? '' }}
                                        </div>
                                        <div class="col-md-4">
                                            <div class="detail-label">Application Status:</div> Awaiting Student Acceptance
                                        </div>
                                        <div class="col-md-4">
                                            <div class="detail-label">Date Submitted:</div> 2025-09-01
                                        </div>
                                    </div>
                                    <hr>

                                    @if (isset($courseStudent) && isset($courseStudent->offer_letter_path))
                                        <div class="offer-status-box alert-success mt-3">
                                            <i class="bi bi-file-earmark-pdf-fill"></i>
                                            <strong>Offer Letter Available:</strong>
                                            {{ $courseStudent->offer_letter_file_name ?? '' }}
                                            <a href="{{ asset($courseStudent->offer_letter_path) }}" target="_blank"
                                                class="btn btn-sm btn-success ms-2">
                                                <i class="bi bi-download"></i>
                                                Download</a>
                                            <button class="btn btn-sm btn-danger ms-1 delete-offer-btn"
                                                data-uni-id="UT-1001"><i class="bi bi-trash"></i> Remove</button>
                                        </div>
                                    @else
                                        <div class="offer-status-box alert-warning mt-3">
                                            <i class="bi bi-exclamation-triangle-fill"></i>
                                            <strong>No Offer Letter</strong> has been uploaded yet.
                                        </div>
                                        <form id="form-{{ $course->id }}" class="offer-upload-form mt-2"
                                            {{-- action="/admin/upload-offer-letter/UT-1001" method="POST" --}} enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" name="applicant_id" value="{{ $applicant->id }}"
                                                hidden>
                                            <label for="offer_ut_1001" class="form-label small text-muted">Replace/Upload
                                                New
                                                Offer Letter:</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control form-control-sm"
                                                    id="offer_ut_1001" name="offer_letter_file" accept=".pdf" required>
                                                <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                                            </div>
                                        </form>
                                        <div id="upload-status-{{ $course->id }}" class="mt-2"></div>
                                    @endif
                                </div>
                            </div>
                        @endforeach


                        {{-- Demo:Start --}}
                        {{-- <div class="uni-card bg-white">
                            <div class="uni-card-header text-success">
                                <i class="bi bi-check-circle-fill"></i> **University of Toronto** (App ID: UT-1001)
                                <span class="badge bg-success uni-status-badge">Offer Granted</span>
                            </div>
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="detail-label">Course Applied:</div> Master of Computer Science
                                    </div>
                                    <div class="col-md-4">
                                        <div class="detail-label">Application Status:</div> Awaiting Student Acceptance
                                    </div>
                                    <div class="col-md-4">
                                        <div class="detail-label">Date Submitted:</div> 2025-09-01
                                    </div>
                                </div>
                                <hr>
                                <div class="offer-status-box alert-success mt-3">
                                    <i class="bi bi-file-earmark-pdf-fill"></i> **Offer Letter Available:**
                                    **UT_Offer_2026.pdf**
                                    <a href="#" class="btn btn-sm btn-success ms-2"><i class="bi bi-download"></i>
                                        Download</a>
                                    <button class="btn btn-sm btn-danger ms-1 delete-offer-btn" data-uni-id="UT-1001"><i
                                            class="bi bi-trash"></i> Remove</button>
                                </div>
                                <form id="form-ut-1001" class="offer-upload-form mt-2"
                                    action="/admin/upload-offer-letter/UT-1001" method="POST"
                                    enctype="multipart/form-data">
                                    <label for="offer_ut_1001" class="form-label small text-muted">Replace/Upload New
                                        Offer Letter:</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control form-control-sm" id="offer_ut_1001"
                                            name="offer_letter_file" accept=".pdf" required>
                                        <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="uni-card bg-white">
                            <div class="uni-card-header text-secondary">
                                <i class="bi bi-clock-fill"></i> **Monash University** (App ID: MU-2050)
                                <span class="badge bg-warning text-dark uni-status-badge">Under Review</span>
                            </div>
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="detail-label">Course Applied:</div> Bachelor of Arts
                                    </div>
                                    <div class="col-md-4">
                                        <div class="detail-label">Application Status:</div> Awaiting Decision
                                    </div>
                                    <div class="col-md-4">
                                        <div class="detail-label">Date Submitted:</div> 2025-09-15
                                    </div>
                                </div>
                                <hr>
                                <div class="offer-status-box alert-warning mt-3">
                                    <i class="bi bi-exclamation-triangle-fill"></i> **No Offer Letter** has been uploaded
                                    yet.
                                </div>
                                <form id="form-mu-2050" class="offer-upload-form mt-2"
                                    action="/admin/upload-offer-letter/MU-2050" method="POST"
                                    enctype="multipart/form-data">
                                    <label for="offer_mu_2050" class="form-label small text-muted">Upload Offer
                                        Letter:</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control form-control-sm" id="offer_mu_2050"
                                            name="offer_letter_file" accept=".pdf" required>
                                        <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        {{-- Demo:End --}}

                    </div>
                </div>
            </div>

        </div>





        <!-- Rejection Modal -->
        <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rejectModalLabel">Reject Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="rejectionReason" class="form-label">Rejection Reason</label>
                            <textarea class="form-control" id="rejectionReason" rows="4" placeholder="Enter the rejection reason..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="submitRejection">Reject</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {




            // Handle AJAX file upload for each university course form
            $('.offer-upload-form').on('submit', function(e) {
                e.preventDefault();

                var form = $(this);
                var courseId = form.attr('id').split('-')[1]; // Extract course id from form id
                var formData = new FormData(this); // Create FormData object with form data

                // Show loading message
                $('#upload-status-' + courseId).html('<span class="text-muted">Uploading...</span>');

                $.ajax({
                    url: "/man-access/students/applicants/upload-offer-letter/" + courseId,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            $('#upload-status-' + courseId).html(
                                '<span class="text-success">Offer letter uploaded successfully!</span>'
                            );
                            // Optionally, update the UI to show the new file or change the status badge
                            $('form#form-' + courseId)
                                .hide(); // Hide the upload form after successful submission
                        } else {
                            $('#upload-status-' + courseId).html(
                                '<span class="text-danger">Error: ' + response.message +
                                '</span>');
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#upload-status-' + courseId).html(
                            '<span class="text-danger">Error: ' + error + '</span>');
                    }
                });
            });







            // actions (e.g., handling document approval/rejection via AJAX)

            var documentId = null;

            // Trigger modal open when reject button is clicked
            $('.reject-btn').on('click', function() {
                // Open the modal when the reject button is clicked
                console.log("Reject button clicked");

                var that = $(this);
                documentId = that.closest('.document-list-item').data('id');

                // that.closest('.document-list-item').find('.file-status')
                //     .removeClass('bg-warning bg-success')
                //     .addClass('bg-danger')
                //     .html('<i class="bi bi-x-circle"></i> Rejected');

                $('#rejectModal').modal('show');
            });

            // Handle rejection submission
            $('#submitRejection').on('click', function() {
                var rejectionReason = $('#rejectionReason').val();
                let documentListItem = $('.document-list-item[data-id="' + documentId + '"]');

                console.log(documentId);
                console.log(documentListItem);
                // return;

                // if (rejectionReason.trim() === "") {
                //     alert("Please provide a rejection reason.");
                //     return;
                // }

                // Simulating rejection with reason (you should replace this with your actual AJAX request to update the status)
                // alert("Document rejected with reason: " + rejectionReason);

                // After rejection, update UI and close modal
                $('#rejectModal').modal('hide');

                $.ajax({
                    url: "{{ route('admin.students.changeDocumentStatus') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        status: 'rejected',
                        id: documentId,
                        status_reason: rejectionReason
                    },
                    success: function(response) {
                        if (response.success) {
                            documentListItem.find('.file-status')
                                .removeClass('bg-warning bg-success')
                                .addClass('bg-danger')
                                .html('<i class="bi bi-check-circle-fill"></i> Rejected');
                            documentListItem.find('.btn-reject').remove();

                            documentListItem.find('.document_details').append(
                                '<small class="d-block text-danger">Reason: ' +
                                rejectionReason + '</small>');
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });
            });




            // click handler for document approval (simulated)
            $('.btn-approve').on('click', function() {

                let that = $(this);
                let fileID = that.closest('.document-list-item').data('id');
                let documentListItem = that.closest('.document-list-item');
                console.log(fileID);
                // return;
                $.ajax({
                    url: "{{ route('admin.students.changeDocumentStatus') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        status: 'approved',
                        id: fileID,
                        status_reason: null
                    },
                    success: function(response) {
                        if (response.success) {
                            documentListItem.find('.file-status')
                                .removeClass('bg-warning bg-danger')
                                .addClass('bg-success')
                                .html('<i class="bi bi-check-circle-fill"></i> Approved');
                            documentListItem.find('.btn-approve').remove();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });


                // var docName = $(this).closest('.document-list-item').find('.file-name').text();
                // // In Laravel, you would make an AJAX call here to update the document status
                // alert('Simulating approval for: ' + docName +
                //     '\n(This action should trigger an AJAX request in your Laravel controller.)');
                // // You would then update the UI element on success.
            });



            // click handler for file upload (simulated)
            $('#offerLetterForm').on('submit', function(e) {
                e.preventDefault();
                var fileName = $('#offerLetterFile').val().split('\\').pop(); // Get just the filename
                if (fileName) {
                    $('#uploadBtn').text('Uploading...').prop('disabled', true);

                    // Simulate a successful upload after a delay
                    setTimeout(function() {
                        $('#uploadBtn').html('<i class="bi bi-upload"></i> Upload Letter').prop(
                            'disabled', false);
                        $('#currentOfferStatus').removeClass('alert-info').addClass('alert-success')
                            .html(
                                '<i class="bi bi-file-earmark-pdf-fill"></i> **' + fileName +
                                '** (Uploaded just now!)' +
                                ' <a href="#" class="btn btn-sm btn-secondary ms-2"><i class="bi bi-download"></i></a>' +
                                ' <button class="btn btn-sm btn-danger ms-1"><i class="bi bi-trash"></i></button>'
                            );
                        alert('Offer Letter uploaded successfully! (Via Form Submission)');
                    }, 1500);
                } else {
                    alert('Please select a file to upload.');
                }
            });
        });
    </script>
@endsection
