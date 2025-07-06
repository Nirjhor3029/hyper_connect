@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.university.title') }}
        </div>

        <div class="card-body">

            {{-- Logo and Name --}}
            <div class="text-center mb-4">
                @if($university->logo)
                    <img src="{{ $university->logo->getUrl('preview') }}" class="img-thumbnail" alt="Logo" style="max-width: 150px;">
                @else
                    <img src="https://via.placeholder.com/150?text=No+Logo" class="img-thumbnail" alt="No Logo" style="max-width: 150px;">
                @endif
                <h3 class="mt-3">{{ $university->name }}</h3>
                <p class="text-muted">{{ $university->university_type }} - {{ $university->code }}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- General Information --}}
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <strong>General Information</strong>
                        </div>
                        <div class="card-body">
                            <p><strong>Country:</strong> {{ $university->country->name ?? 'N/A' }}</p>
                            <p><strong>State:</strong> {{ $university->state->name ?? 'N/A' }}</p>
                            <p><strong>City:</strong> {{ $university->city->name ?? 'N/A' }}</p>
                            <p><strong>Accreditation:</strong> {{ $university->accreditation ?? 'N/A' }}</p>
                            <p>
                                <strong>Status:</strong>
                                @if($university->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- Contact Information --}}
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <strong>Contact Information</strong>
                        </div>
                        <div class="card-body">
                            <p><strong>Website:</strong>
                                @if($university->website)
                                    <a href="{{ $university->website }}" target="_blank">{{ $university->website }}</a>
                                @else
                                    N/A
                                @endif
                            </p>
                            <p><strong>Email:</strong>
                                @if($university->contact_email)
                                    <a href="mailto:{{ $university->contact_email }}">{{ $university->contact_email }}</a>
                                @else
                                    N/A
                                @endif
                            </p>
                            <p><strong>Phone:</strong> {{ $university->contact_phone ?? 'N/A' }}</p>
                            @if($university->logo_url)
                                <p><strong>Logo URL:</strong> <a href="{{ $university->logo_url }}" target="_blank">{{ $university->logo_url }}</a></p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>


            {{-- Address & Details --}}
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <strong>Address & Details</strong>
                </div>
                <div class="card-body">
                    <p><strong>Address:</strong> {!! $university->address ?? 'N/A' !!}</p>
                    <hr>
                    <p><strong>University Details:</strong> {!! $university->university_details ?? 'N/A' !!}</p>
                </div>
            </div>

            {{-- Tags --}}
            @if($university->tags->isNotEmpty())
                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <strong>Tags</strong>
                    </div>
                    <div class="card-body">
                        @foreach($university->tags as $tag)
                            <span class="badge badge-info mr-1">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- Back Button --}}
            <div class="form-group mt-4">
                <a class="btn btn-secondary" href="{{ route('admin.universities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>




@endsection
