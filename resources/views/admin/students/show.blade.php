@extends('layouts.admin')
@section('content')

    <style>
        /* Custom CSS for profile design */
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .card-header {

            border-bottom: none;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
            padding: 1rem 1.5rem;
        }
        .card-body p {

            margin-bottom: 0.5rem; /* Reduce space between paragraphs */
        }
        .card-body strong {
            color: #343a40; /* Darker color for labels */
        }
        .img-fluid.rounded-circle {
            border: 4px solid #fff;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.1);
        }
        .profile-placeholder {
            background-color: #e9ecef;
            color: #6c757d;
            border-radius: 50%;
        }
        .badge {
            font-size: 0.85em;
            padding: 0.5em 0.7em;
            margin-right: 0.25em;
            margin-bottom: 0.25em;
            display: inline-block; /* Ensure badges wrap correctly */
        }
        .badge.bg-success { background-color: #28a745 !important; }
        .badge.bg-danger { background-color: #dc3545 !important; }
        .badge.bg-primary { background-color: #007bff !important; }
        .badge.bg-info { background-color: #17a2b8 !important; }
        .badge.bg-warning { background-color: #ffc107 !important; }
        .badge.bg-secondary { background-color: #6c757d !important; }
        .badge.bg-dark { background-color: #343a40 !important; }
        .badge.bg-light.text-dark.border {
            background-color: #f8f9fa !important;
            border-color: #dee2e6 !important;
            color: #343a40 !important;
        }

        /* Adjust padding for the entire container */
        .container.mt-4 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

    </style>

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.student.title') }}

            <a class="btn btn-secondary " href="{{ route('admin.students.index') }}" style="float: right">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <div class="card-body">
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">{{ $student->name }}'s Profile</h2>

                </div>

                <div class="row">
                    {{-- Profile Picture Card --}}
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100 text-center">
                            <div class="card-body">
                                @if($student->photo)
                                    <img src="{{ $student->photo->getUrl('thumb') }}" class="img-fluid rounded-circle mb-3" alt="Student Photo" style="width: 150px; height: 150px; object-fit: cover;">
                                @else
                                    <div class="profile-placeholder d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 150px; height: 150px; background-color: #f0f2f5; border-radius: 50%; font-size: 3rem; color: #ced4da;">
                                        <i class="fas fa-user"></i> {{-- Requires Font Awesome --}}
                                    </div>
                                @endif
                                <h4 class="card-title">{{ $student->name }}</h4>
                                <p class="card-text text-muted">{{ $student->email }}</p>
                                @if($student->phone)
                                    <p class="card-text text-muted"><i class="fas fa-phone-alt"></i> {{ $student->phone }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Personal Details Card --}}
                    <div class="col-md-8 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-primary text-white">
                                <h5>Personal Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-2"><strong>Country:</strong> {{ $student->country->name ?? '' }}</div>
                                    <div class="col-md-6 mb-2"><strong>Date of Birth:</strong> {{ $student->dob }}</div>
                                    <div class="col-md-6 mb-2"><strong>Gender:</strong> {{ App\Models\Student::GENDER_SELECT[$student->gender] ?? '' }}</div>
                                    <div class="col-md-6 mb-2"><strong>Passport No:</strong> {{ $student->passport_no }}</div>
                                    <div class="col-md-6 mb-2"><strong>Emergency Contact:</strong> {{ $student->emergency_contact }}</div>
                                    <div class="col-md-12 mb-2"><strong>Address:</strong> {{ $student->address }}</div>
                                    <div class="col-md-12 mb-2"><strong>Current Address:</strong> {!! $student->current_address !!}</div>
                                    <div class="col-md-12 mb-2"><strong>Permanent Address:</strong> {!! $student->permanent_address !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Academic & Application Details --}}
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-info text-white">
                                <h5>Academic & Application Details</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Education Background:</strong> {!! $student->education_background !!}</p>
                                <p><strong>Max Education Level:</strong> {{ $student->max_education_level->title ?? '' }}</p>
                                <p><strong>Academic Details:</strong> {!! $student->academic_details !!}</p>
                                <p><strong>Offer Letter Details:</strong> {!! $student->offer_letter_details !!}</p>
                                <p><strong>Additional Requirements:</strong> {!! $student->additional_requirements !!}</p>
                                <p><strong>Offer Given to Student:</strong> <span class="badge {{ $student->is_offer_given_to_student ? 'bg-success' : 'bg-danger' }}">{{ $student->is_offer_given_to_student ? 'Yes' : 'No' }}</span></p>
                                <p><strong>Offer Details:</strong> {!! $student->offer_details !!}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Status & Financial Details --}}
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-warning text-dark">
                                <h5>Status & Financial Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-2"><strong>VAL Status:</strong> {{ $student->val_status }}</div>
                                    <div class="col-md-6 mb-2"><strong>EMGS Status:</strong> {{ $student->emgs_status }}</div>
                                    <div class="col-md-6 mb-2"><strong>Visa Status:</strong> {{ $student->visa_status }}</div>
                                    <div class="col-md-6 mb-2"><strong>Payment Status:</strong> {{ $student->payment_status }}</div>
                                    <div class="col-md-6 mb-2"><strong>Current Status:</strong> {{ $student->current_status }}</div>
                                    <div class="col-md-6 mb-2"><strong>Commission Amount:</strong> {{ $student->commission_amount }}</div>
                                    <div class="col-md-6 mb-2"><strong>Scholarship Status:</strong> <span class="badge {{ $student->scholarship_status ? 'bg-success' : 'bg-danger' }}">{{ $student->scholarship_status ? 'Yes' : 'No' }}</span></div>
                                    <div class="col-md-6 mb-2"><strong>Enrollment Status:</strong> {{ $student->enrollement_status }}</div>
                                    <div class="col-md-12 mb-2"><strong>Commission Claimed from University:</strong> <span class="badge {{ $student->is_commission_claimed_from_univeristy ? 'bg-success' : 'bg-danger' }}">{{ $student->is_commission_claimed_from_univeristy ? 'Yes' : 'No' }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Agent Details --}}
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-secondary text-white">
                                <h5>Agent Details</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Lead Agent:</strong> {{ $student->lead_agent->agency_name ?? '' }}</p>
                                <p><strong>Handling Agent:</strong> {{ $student->handelling_agent->agency_name ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Interested & Confirmed Selections --}}
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-dark text-white">
                                <h5>Interests & Confirmation</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Interested Countries:</strong>
                                    @foreach($student->interested_countries as $country)
                                        <span class="badge bg-primary me-1">{{ $country->name }}</span>
                                    @endforeach
                                </p>
                                <p><strong>Interested Universities:</strong>
                                    @foreach($student->univertsities as $university)
                                        <span class="badge bg-info me-1">{{ $university->name }}</span>
                                    @endforeach
                                </p>
                                <p><strong>Interested Subjects:</strong>
                                    @foreach($student->subjects as $subject)
                                        <span class="badge bg-warning text-dark me-1">{{ $subject->subject_name }}</span>
                                    @endforeach
                                </p>
                                <p><strong>Interested Programs:</strong>
                                    @foreach($student->programs as $program)
                                        <span class="badge bg-success me-1">{{ $program->name }}</span>
                                    @endforeach
                                </p>
                                <p><strong>Interested Courses:</strong>
                                    @foreach($student->course_interesteds as $course)
                                        <span class="badge bg-danger me-1">{{ $course->name }}</span>
                                    @endforeach
                                </p>
                                <hr>
                                <p><strong>Confirmed Country:</strong> <span class="badge bg-primary">{{$student->confirm_country->name ?? ''}}</span></p>
                                <p><strong>Confirmed University:</strong> <span class="badge bg-info">{{$student->confirm_university->name ?? ''}}</span></p>
                                <p><strong>Confirmed Subject:</strong> <span class="badge bg-warning text-dark">{{$student->confirm_subject->subject_name ?? ''}}</span></p>
                            </div>
                        </div>
                    </div>

                    {{-- Document & Attachments --}}
                    <div class="col-12 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-success text-white">
                                <h5>Documents & Attachments</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6>Academic Attachments:</h6>
                                        @forelse($student->academic_attachments as $attachment)
                                            <a href="{{ $attachment->file_url }}" target="_blank" class="badge bg-light text-dark border me-1 mb-1">{{ $attachment->file_url }}</a>
                                        @empty
                                            <p class="text-muted">No academic attachments.</p>
                                        @endforelse
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h6>Academic Certificates:</h6>
                                        @forelse($student->academic_certificates as $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank" class="badge bg-light text-dark border me-1 mb-1">View File</a>
                                        @empty
                                            <p class="text-muted">No academic certificates.</p>
                                        @endforelse
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h6>General Attachments:</h6>
                                        @forelse($student->attachments as $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank" class="badge bg-light text-dark border me-1 mb-1">View File</a>
                                        @empty
                                            <p class="text-muted">No general attachments.</p>
                                        @endforelse
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h6>Medical Certificates:</h6>
                                        @forelse($student->medical_certificates as $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank" class="badge bg-light text-dark border me-1 mb-1">View File</a>
                                        @empty
                                            <p class="text-muted">No medical certificates.</p>
                                        @endforelse
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <h6>Offer Letter Attachments:</h6>
                                        @forelse($student->offer_letter_attachments as $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank" class="badge bg-light text-dark border me-1 mb-1">View File</a>
                                        @empty
                                            <p class="text-muted">No offer letter attachments.</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> {{-- End of row --}}

                <div class="form-group text-center mt-4">
                    <a class="btn btn-secondary" href="{{ route('admin.students.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>


        </div>
    </div>

    {{-- <div class="card">
         <div class="card-header">
             {{ trans('global.relatedData') }}
         </div>
         <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
             <li class="nav-item">
                 <a class="nav-link" href="#student_applications" role="tab" data-toggle="tab">
                     {{ trans('cruds.application.title') }}
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#student_commission_distributions" role="tab" data-toggle="tab">
                     {{ trans('cruds.commissionDistribution.title') }}
                 </a>
             </li>
         </ul>
         <div class="tab-content">
             <div class="tab-pane" role="tabpanel" id="student_applications">
                 @includeIf('admin.students.relationships.studentApplications', ['applications' => $student->studentApplications])
             </div>
             <div class="tab-pane" role="tabpanel" id="student_commission_distributions">
                 @includeIf('admin.students.relationships.studentCommissionDistributions', ['commissionDistributions' => $student->studentCommissionDistributions])
             </div>
         </div>
     </div>--}}

@endsection
