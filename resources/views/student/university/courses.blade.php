@extends('layouts.student')

@section('content')
    <div class="container">
        {{-- 🔰 University Title --}}
        <h4 class="mb-4">
            Courses at <span class="text-primary">{{ $university->name }}</span>
        </h4>

        {{-- 📦 Course List --}}
        <div class="row">
            @forelse($courses as $course)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex flex-column">

                            {{-- 🔹 Course Name --}}
                            <h5 class="card-title text-dark">{{ $course->name }}</h5>

                            {{-- 🔸 Basic Info --}}
                            <p class="mb-1"><strong>Mode:</strong> {{ \App\Models\Course::COURSE_MODE_RADIO[$course->course_mode] ?? 'N/A' }}</p>
                            <p class="mb-1"><strong>Duration:</strong> {{ $course->duration }} months</p>
                            <p class="mb-1"><strong>Semesters:</strong> {{ $course->no_of_semester }}</p>
                            <p class="mb-1"><strong>Total Fees:</strong> {{ number_format($course->total_fees) }} {{ config('app.currency', 'USD') }}</p>

                            {{-- 🌐 English Requirement --}}
                            <p class="mb-1">
                                <strong>English Requirement:</strong>
                                {{ \App\Models\Course::ENGLISH_REQUIREMENT_RADIO[$course->english_requirement] ?? 'N/A' }}
                                @if($course->minimum_english_score)
                                    (Min: {{ $course->minimum_english_score }})
                                @endif
                            </p>

                            {{-- 🎓 Scholarship & Commission --}}
                            @if($course->scholarship)
                                <p class="mb-1 text-success"><strong>Scholarship:</strong> {{ $course->scholarship }}</p>
                            @endif


                            {{-- 📜 Course Details --}}
                            @if($course->course_details)
                                <p class="mb-2 text-muted small">{{ \Illuminate\Support\Str::limit(strip_tags($course->course_details), 150) }}</p>
                            @endif

                            {{-- 🌍 External URL --}}
                            @if($course->url)
                                <p><a href="{{ $course->url }}" target="_blank" class="text-decoration-underline small">Visit Course Page</a></p>
                            @endif



                            {{-- ✅ Apply Button --}}
                            <div class="mt-auto text-end">
                                <a href="#" class="btn btn-sm btn-success">
                                    <i class="fas fa-paper-plane"></i> Apply
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">
                        No courses found for this university.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
