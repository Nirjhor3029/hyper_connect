@extends('layouts.student')
@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Student Profile</h4>
            <a href="{{ route('student.data.edit') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>

        <div class="card-body">

            {{-- Profile Header with Photo --}}
            <div class="row mb-4 align-items-center">
                <div class="col-md-9">
                    <h5 class="mb-1">{{ $student->name }}</h5>
                    <p class="mb-0"><strong>Email:</strong> {{ $student->email }}</p>
                    <p class="mb-0"><strong>Phone:</strong> {{ $student->phone }}</p>
                </div>
                <div class="col-md-3 text-end">
                    @if($student->photo)
                        <a href="{{ $student->photo->getUrl() }}" target="_blank">
                            <img src="{{ $student->photo->getUrl('thumb') }}" class="img-thumbnail rounded" style="max-width: 120px;">
                        </a>
                    @else
                        <img src="{{ asset('assets/images/img_avatar.png') }}" class="img-thumbnail rounded" style="max-width: 120px;">
                    @endif
                </div>
            </div>

            {{-- Basic Info --}}
            <h5 class="border-bottom pb-2">Basic Information</h5>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Gender:</strong> {{ App\Models\Student::GENDER_SELECT[$student->gender] ?? '' }}</div>
                <div class="col-md-4"><strong>DOB:</strong> {{ $student->dob }}</div>
                <div class="col-md-4"><strong>Country:</strong> {{ $student->country->name ?? '' }}</div>
            </div>

            {{-- Address Info --}}
            <h5 class="border-bottom pb-2 mt-4">Address</h5>
            <div class="row mb-2">
                <div class="col-md-6"><strong>Current Address:</strong><br> {!! $student->current_address !!}</div>
                <div class="col-md-6"><strong>Permanent Address:</strong><br> {!! $student->permanent_address !!}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6"><strong>Full Address:</strong> {{ $student->address }}</div>
                <div class="col-md-6"><strong>Passport No:</strong> {{ $student->passport_no }}</div>
            </div>

            {{-- Guardian & Emergency --}}
            <h5 class="border-bottom pb-2 mt-4">Guardian & Emergency</h5>
            <div class="row mb-2">
                <div class="col-md-6"><strong>Guardian Details:</strong><br> {!! $student->guardian_details !!}</div>
                <div class="col-md-6"><strong>Emergency Contact:</strong> {{ $student->emergency_contact }}</div>
            </div>

            {{-- Academic Info --}}
            <h5 class="border-bottom pb-2 mt-4">Academic</h5>
            <div class="mb-2"><strong>Education Background:</strong><br> {!! $student->education_background !!}</div>
            <div class="row mb-2">
                <div class="col-md-6"><strong>Max Education Level:</strong> {{ $student->max_education_level->title ?? '' }}</div>
                <div class="col-md-6"><strong>Academic Details:</strong> {!! $student->academic_details !!}</div>
            </div>

            {{-- Interest & Confirmation --}}
            <h5 class="border-bottom pb-2 mt-4">Interests & Confirmed Choices</h5>
            <div class="row mb-2">
                <div class="col-md-4"><strong>Interested Countries:</strong><br>
                    @foreach($student->interested_countries as $item)
                        <span class="badge bg-info">{{ $item->name }}</span>
                    @endforeach
                </div>
                <div class="col-md-4"><strong>Universities:</strong><br>
                    @foreach($student->univertsities as $item)
                        <span class="badge bg-info">{{ $item->name }}</span>
                    @endforeach
                </div>
                <div class="col-md-4"><strong>Subjects:</strong><br>
                    @foreach($student->subjects as $item)
                        <span class="badge bg-info">{{ $item->subject_name }}</span>
                    @endforeach
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4"><strong>Programs:</strong><br>
                    @foreach($student->programs as $item)
                        <span class="badge bg-info">{{ $item->name }}</span>
                    @endforeach
                </div>
                <div class="col-md-4"><strong>Course Interested:</strong><br>
                    @foreach($student->course_interesteds as $item)
                        <span class="badge bg-info">{{ $item->name }}</span>
                    @endforeach
                </div>
                <div class="col-md-4"><strong>Confirmed Country:</strong> {{ $student->confirm_country->name ?? '' }}<br>
                    <strong>Confirmed University:</strong> {{ $student->confirm_university->name ?? '' }}<br>
                    <strong>Confirmed Subject:</strong> {{ $student->confirm_subject->subject_name ?? '' }}
                </div>
            </div>

            {{-- Offer & Visa --}}
            <h5 class="border-bottom pb-2 mt-4">Offer & Visa</h5>
            <div class="row mb-2">
                <div class="col-md-6"><strong>Offer Given:</strong> <input type="checkbox" disabled {{ $student->is_offer_given_to_student ? 'checked' : '' }}></div>
                <div class="col-md-6"><strong>Offer Details:</strong> {!! $student->offer_details !!}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4"><strong>Visa Status:</strong> {{ $student->visa_status }}</div>
                <div class="col-md-4"><strong>EMGS Status:</strong> {{ $student->emgs_status }}</div>
                <div class="col-md-4"><strong>VAL Status:</strong> {{ $student->val_status }}</div>
            </div>

            {{-- Finance --}}
            <h5 class="border-bottom pb-2 mt-4">Finance</h5>
            <div class="row mb-2">
                <div class="col-md-4"><strong>Commission Amount:</strong> {{ $student->commission_amount }}</div>
                <div class="col-md-4"><strong>Payment Status:</strong> {{ $student->payment_status }}</div>
                <div class="col-md-4"><strong>Commission Claimed:</strong> <input type="checkbox" disabled {{ $student->is_commission_claimed_from_univeristy ? 'checked' : '' }}></div>
            </div>

            {{-- Final Status --}}
            <h5 class="border-bottom pb-2 mt-4">Status</h5>
            <div class="row mb-2">
                <div class="col-md-4"><strong>Enrollment Status:</strong> {{ $student->enrollement_status }}</div>
                <div class="col-md-4"><strong>Current Status:</strong> {{ $student->current_status }}</div>
                <div class="col-md-4"><strong>Scholarship:</strong> <input type="checkbox" disabled {{ $student->scholarship_status ? 'checked' : '' }}></div>
            </div>

            {{-- Files --}}
            <h5 class="border-bottom pb-2 mt-4">Attachments</h5>
            <div class="row">
                <div class="col-md-4">
                    <strong>Academic Certificates:</strong><br>
                    @foreach($student->academic_certificates as $media)
                        <a href="{{ $media->getUrl() }}" target="_blank">{{ trans('global.view_file') }}</a><br>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <strong>Medical Certificates:</strong><br>
                    @foreach($student->medical_certificates as $media)
                        <a href="{{ $media->getUrl() }}" target="_blank">{{ trans('global.view_file') }}</a><br>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <strong>Other Attachments:</strong><br>
                    @foreach($student->attachments as $media)
                        <a href="{{ $media->getUrl() }}" target="_blank">{{ trans('global.view_file') }}</a><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
