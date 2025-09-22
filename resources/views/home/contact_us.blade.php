@extends('layouts.home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/home/css/contact_us.css') }}">
    <style>
        .university-logos {
            margin: 0;
        }

        .university-logos-wrapper {
            width: 60vw;
        }

        .university-logos .logo {
            height: 60px;
        }
    </style>
@endpush

@section('header')
    <!-- Top-Header -->
    @include('layouts._partials.top_header')
    <!-- Contact Bar header -->
    @include('layouts._partials.header_with_logos', compact('university_logos'))
@endsection

@section('main_content')
    <!-- Hero Slider -->
    <div id="heroCarousel" class="carousel slide hero-slider" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $images = ['hero_slider_11.png', 'hero_slider_21.png', 'hero_slider_31.png'];
            @endphp
            @foreach ($images as $key => $item)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="slide"
                        style="background-image: url('{{ asset('assets/home/images/hero_sliders/' . $item) }}'); background-size: cover; background-position: center;">
                    </div>
                </div>
            @endforeach

            <div class="carousel-item ">
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDUwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjMTk3NmQyIi8+CjxnIG9wYWNpdHk9IjAuMSI+CjxjaXJjbGUgY3g9IjIwMCIgY3k9IjEwMCIgcj0iNDAiIGZpbGw9IndoaXRlIi8+CjxjaXJjbGUgY3g9IjQwMCIgY3k9IjMwMCIgcj0iNjAiIGZpbGw9IndoaXRlIi8+CjxjaXJjbGUgY3g9IjgwMCIgY3k9IjE1MCIgcj0iNTAiIGZpbGw9IndoaXRlIi8+CjwvZz4KPC9zdmc+');">
                    <div class="container">
                        <div class="slide-content">
                            <h1 class="display-4 fw-bold mb-3">Graduation Success</h1>
                            <p class="lead mb-4">Celebrating academic achievements and bright futures ahead</p>
                            <button class="btn btn-light btn-lg">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDUwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjZTQzNDA1Ii8+CjxnIG9wYWNpdHk9IjAuMSI+CjxyZWN0IHg9IjEwMCIgeT0iNTAiIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgZmlsbD0id2hpdGUiLz4KPHJlY3QgeD0iNTAwIiB5PSIyMDAiIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiBmaWxsPSJ3aGl0ZSIvPgo8cmVjdCB4PSI5MDAiIHk9IjEwMCIgd2lkdGg9IjkwIiBoZWlnaHQ9IjkwIiBmaWxsPSJ3aGl0ZSIvPgo8L2c+Cjwvc3ZnPg==');">
                    <div class="container">
                        <div class="slide-content">
                            <h1 class="display-4 fw-bold mb-3">Quality Education</h1>
                            <p class="lead mb-4">Connecting students with world-class universities and programs</p>
                            <button class="btn btn-light btn-lg">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="contact-us-title-section">
                <h1 class="display-4 fw-bold mb-3 title">Contact Us</h1>
                <p class="lead">Any question or remarks? Just write us a message!</p>
            </div>

            {{-- Contact Us Form --}}
            <div class="contact-us-form-section">

                <div class="contact-us-card">
                    <div class="row g-0" style="height: 100%;">
                        <!-- Contact Information Section -->
                        <div class="col-lg-5 contact-us-info-container">
                            <div class="contact-us-info">
                                <div>
                                    <h3>Contact Information</h3>
                                    <p>Say something to start a live chat!</p>

                                    <div class="contact-us-details">
                                        <div class="contact-us-item">
                                            <div class="contact-us-icon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div>+60178378007</div>
                                        </div>

                                        <div class="contact-us-item">
                                            <div class="contact-us-icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>global@hyperconnect.my</div>
                                        </div>

                                        <div class="contact-us-item">
                                            <div class="contact-us-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div>
                                                HQ, 31 Level, Menara Am Bank, 8<br>
                                                Jalan Yap Kwan Seng, 50450,<br>
                                                Kuala Lumpur, Malaysia.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form Section -->
                        <div class="col-lg-7">
                            <div class="contact-us-form">
                                <div id="formMessage"></div> <!-- For success/error messages -->

                                <form id="contactForm">
                                    @csrf
                                    <div class="row row-cols-1 row-cols-md-2 g-3 mb-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="first_name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-cols-1 row-cols-md-2 g-3 mb-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" name="phone"
                                                    placeholder="+1 012 3456 789">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" placeholder="Write your message.." name="message"></textarea>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-send">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
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
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();
                let form = $(this);
                let formData = form.serialize();

                $.ajax({
                    url: "{{ route('contactUs.storeByAjax') }}",
                    method: "POST",
                    data: formData,
                    success: function(response) {
                        $('#formMessage').html(`
                    <div class="alert alert-success">${response.message}</div>
                `);
                        form[0].reset(); // reset form
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let errorHtml = '<div class="alert alert-danger"><ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] + '</li>';
                            });
                            errorHtml += '</ul></div>';
                            $('#formMessage').html(errorHtml);
                        } else {
                            $('#formMessage').html(`
                        <div class="alert alert-danger">Something went wrong. Please try again.</div>
                    `);
                        }
                    }
                });
            });
        });
    </script>
    <script>
        window.addEventListener('load', () => {
            const logos = document.querySelector('.university-logos');
            const logosWrapper = document.querySelector('.university-logos-wrapper');

            // Duplicate the logos for infinite scroll
            const clone = logos.innerHTML;
            logos.innerHTML += clone;

            let scrollAmount = 0;

            function slide() {
                scrollAmount += 1; // adjust speed
                if (scrollAmount >= logos.scrollWidth / 2) {
                    scrollAmount = 0; // reset to start
                }
                logos.style.transform = `translateX(-${scrollAmount}px)`;
                requestAnimationFrame(slide);
            }

            slide();
        });
    </script>
@endpush
