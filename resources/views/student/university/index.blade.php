@extends('layouts.student')
@section('content')
    <div class="container">
        <h4 class="mb-4">All Universities</h4>

        {{-- 🔍 Search Filter --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <form method="GET" class="row g-3">
                    <div class="col-md-3">
                        <label for="country">Country</label>
                        <select name="country" id="country" class="form-control select2">
                            <option value="">-- Select Country --</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ request('country') == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-3">
                        <label for="tag">Tag</label>
                        <select name="tag" id="tag" class="form-control select2">
                            <option value="">-- Select Tag --</option>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}" {{ request('tag') == $tag->id ? 'selected' : '' }}>
                                    {{ $tag->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="name">University Name</label>
                        <input type="text" name="name" value="{{ request('name') }}" class="form-control" placeholder="Enter name">
                    </div>

                    <div class="col-md-3 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary me-2">Search</button>
                        <a href="{{ route('student.university.show') }}" class="btn btn-secondary ml-2">Reset</a>
                    </div>
                </form>
            </div>
        </div>

        {{-- 🏫 University Grid --}}
        <div class="row">
            @forelse($universities as $university)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($university->logo)
                            <img src="{{ $university->logo->preview }}" class="card-img-top" style="height: 180px; object-fit: contain; padding: 1rem;" alt="Logo">
                        @else
                            <img src="/assets/images/university.png" class="card-img-top" style="height: 180px; object-fit: contain; padding: 1rem;" alt="Logo">

                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $university->name }}</h5>
                            <p class="mb-1"><strong>Country:</strong> {{ $university->country->name ?? 'N/A' }}</p>
                            <p class="mb-1"><strong>Email:</strong> {{ $university->contact_email ?? 'N/A' }}</p>
                            <p class="mb-1"><strong>Phone:</strong> {{ $university->contact_phone ?? 'N/A' }}</p>
                            <p class="mb-2"><strong>Website:</strong>
                                @if($university->website)
                                    <a href="{{ $university->website }}" target="_blank">{{ parse_url($university->website, PHP_URL_HOST) }}</a>
                                @else
                                    N/A
                                @endif
                            </p>

                            <div class="mt-auto d-flex justify-content-between">
                                <a href="{{ route('student.university.courses', $university->id) }}" class="btn btn-sm btn-outline-info">
                                    <i class="fas fa-book"></i> Courses
                                </a>
                                <a href="{{ route('student.university.details', $university->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-info-circle"></i> Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted">No universities found.</p>
                </div>
            @endforelse
        </div>

        {{-- 📄 Pagination --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $universities->appends(request()->query())->links() }}
        </div>
    </div>
@endsection
