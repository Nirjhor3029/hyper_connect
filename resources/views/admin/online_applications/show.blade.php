@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Application Details</h5>
            {{-- <a href="{{ route('applications.index') }}" class="btn btn-light btn-sm">← Back</a> --}}
        </div>

        <div class="card-body">
            <h5 class="text-primary mb-3">Personal Information</h5>
            <div class="row">
                <div class="col-md-4">
                    <strong>Applicant Type:</strong> {{ $application->applicant_type }}
                </div>
                <div class="col-md-4">
                    <strong>Full Name:</strong> {{ $application->first_name }} {{ $application->last_name }}
                </div>
                <div class="col-md-4">
                    <strong>Email:</strong> {{ $application->email }}
                </div>
                <div class="col-md-4">
                    <strong>Phone:</strong> {{ $application->phone }}
                </div>
                <div class="col-md-4">
                    <strong>Father Phone:</strong> {{ $application->father_phone ?? '-' }}
                </div>
                <div class="col-md-4">
                    <strong>Gender:</strong> {{ ucfirst($application->gender) }}
                </div>
                <div class="col-md-4">
                    <strong>Date of Birth:</strong> {{ \Carbon\Carbon::parse($application->date_of_birth)->format('d M Y') }}
                </div>
                <div class="col-md-4">
                    <strong>Religion:</strong> {{ $application->religion ?? '-' }}
                </div>
                <div class="col-md-4">
                    <strong>Marital Status:</strong> {{ $application->marital_status ?? '-' }}
                </div>
            </div>

            <hr>

            <h5 class="text-primary mb-3">Address Information</h5>
            <div class="row">
                <div class="col-md-4"><strong>Address:</strong> {{ $application->address }}</div>
                <div class="col-md-4"><strong>City:</strong> {{ $application->city }}</div>
                <div class="col-md-4"><strong>State:</strong> {{ $application->state }}</div>
                <div class="col-md-4"><strong>Country:</strong> {{ $application->country }}</div>
                <div class="col-md-4"><strong>Postal Code:</strong> {{ $application->postal_code ?? '-' }}</div>
            </div>

            <hr>

            <h5 class="text-primary mb-3">Education Information</h5>
            <div class="row">
                <div class="col-md-4"><strong>Highest Qualification:</strong> {{ $application->highest_qualification }}</div>
                <div class="col-md-4"><strong>Graduation Date:</strong> {{ \Carbon\Carbon::parse($application->graduation_date)->format('d M Y') }}</div>
                <div class="col-md-4"><strong>Awarding Institution:</strong> {{ $application->awarding_institution }}</div>
                <div class="col-md-12"><strong>Work Experience:</strong> {{ $application->work_experience }}</div>
            </div>

            <hr>

            <h5 class="text-primary mb-3">Study Preferences</h5>
            <div class="row">
                <div class="col-md-4"><strong>Campus:</strong> {{ $application->campus }}</div>
                <div class="col-md-4"><strong>Intake:</strong> {{ $application->intake }}</div>
                <div class="col-md-4"><strong>Study Type:</strong> {{ ucfirst($application->study_type) }}</div>
                <div class="col-md-4"><strong>Sponsorships:</strong> {{ $application->sponsorships ?? '-' }}</div>
                <div class="col-md-4"><strong>External Scholarships:</strong> {{ $application->external_scholarships ?? '-' }}</div>
            </div>

            <hr>

            <h5 class="text-primary mb-3">Uploaded Documents</h5>
            <div class="row g-3">
                <div class="col-md-3">
                    <strong>Photo:</strong><br>
                    <img src="{{ asset('storage/'.$application->photo) }}" alt="Photo" class="img-thumbnail" width="120">
                </div>
                <div class="col-md-3">
                    <strong>Passport Copy:</strong><br>
                    <a href="{{ asset('storage/'.$application->passport_copy) }}" target="_blank" class="btn btn-sm btn-outline-primary mt-1">View</a>
                </div>
                @if($application->english_transcript)
                <div class="col-md-3">
                    <strong>English Transcript:</strong><br>
                    <a href="{{ asset('storage/'.$application->english_transcript) }}" target="_blank" class="btn btn-sm btn-outline-primary mt-1">View</a>
                </div>
                @endif
                @if(!empty($application->academic_results))
                <div class="col-md-12 mt-3">
                    <strong>Academic Results:</strong><br>
                    @foreach(json_decode(json_encode($application->academic_results), true) as $file)
                        <a href="{{ asset('storage/'.$file) }}" target="_blank" class="btn btn-sm btn-outline-success mt-1">View File</a>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
