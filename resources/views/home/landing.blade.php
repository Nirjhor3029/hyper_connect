@extends('layouts.home')

@section('main_content')
    <header class="" style="padding-top: 0;">
        <div class="contact-bar">
            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="{{ asset('assets/home/images/social_icons/facebook.png') }}" alt="" srcset="">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('assets/home/images/social_icons/instagram.png') }}" alt="" srcset="">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('assets/home/images/social_icons/youtube.png') }}" alt="" srcset="">
                </a>
                {{-- <a href="#" class="social-icon facebook">f</a>
                <a href="#" class="social-icon instagram">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
                <a href="#" class="social-icon youtube">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a> --}}
            </div>

            {{-- <div class="divider"></div> --}}

            <div class="contact-details">
                <!-- Email -->
                <div class="contact-item">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                    <a href="mailto:contact@hyperconnect.com">contact@hyperconnect.com</a>
                </div>

                {{-- <div class="divider"></div> --}}

                <!-- Phone -->
                <div class="contact-item">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                    <span>+91 9999999999</span>
                </div>

                {{-- <div class="divider"></div> --}}

                <!-- Location -->
                <div class="contact-item">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                    </svg>
                    <span>menara Am tower, my</span>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-lg-3">
                    <div class="contact-info d-flex align-items-center justify-content-end">

                        <div class="social-icons">
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="me-3">
                        <div><i class="fas fa-envelope"></i> contact@hyperconnect.com</div>
                        <div><i class="fas fa-phone"></i> +91 9999999999</div>
                        <div><i class="fas fa-map-marker-alt"></i> Manaus Am Tower, my</div>
                    </div>
                </div>
            </div>
        </div> --}}
    </header>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-part" style="border-right: 1px solid #ddd;">
                    <!-- Search Section -->
                    <div class="search-section">
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label class="form-label" for="search">
                                    <h3 class="">Where to study</h3>
                                </label>
                                <input type="text" class="form-control" name="search" id="search"
                                    placeholder="What you are looking for">
                            </div>
                        </div>


                        {{-- <p class="mb-4">Choose your way forward</p> --}}
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Institute type</label>
                                <select class="form-select">
                                    <option>Select Type</option>
                                    <option>University</option>
                                    <option>College</option>
                                    <option>Institute</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Location</label>
                                <select class="form-select">
                                    <option>Select City</option>
                                    <option>Dhaka</option>
                                    <option>Chittagong</option>
                                    <option>Sylhet</option>
                                </select>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-search">Search</button>
                            </div>
                        </div>
                    </div>



                    <!-- University Logos -->
                    <div class="university-logos-wrapper">
                        <div class="university-logos">
                            @foreach ($university_logos as $logo)
                                <a href="{{ $logo['href'] }}" target="_blank" class="logo">
                                    <img src="{{ asset('assets/home/images/university/' . $logo['image_path']) }}"
                                        class="logo" alt="">
                                </a>
                            @endforeach
                            @for ($i = 0; $i < 10; $i++)
                                <img src="{{ asset('assets/home/images/university/university_logo_' . ($i + 1) . '.png') }}"
                                    class="logo" alt="">
                            @endfor
                        </div>
                    </div>

                    <!-- University Logos -->
                    {{-- <div class="university-logos">
                        <div class="text-center" style="width: 120px;">
                            <div
                                style="width: 80px; height: 80px; background: #f0f0f0; border-radius: 50%; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center;">
                                <span style="font-weight: bold; color: #666;">AIUB</span>
                            </div>
                        </div>
                        <div class="text-center" style="width: 120px;">
                            <div
                                style="width: 80px; height: 80px; background: #f0f0f0; border-radius: 50%; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center;">
                                <span style="font-weight: bold; color: #666;">MAHSA</span>
                            </div>
                        </div>
                        <div class="text-center" style="width: 120px;">
                            <div
                                style="width: 80px; height: 80px; background: #f0f0f0; border-radius: 50%; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center;">
                                <span style="font-weight: bold; color: #666;">UTM</span>
                            </div>
                        </div>
                        <div class="text-center" style="width: 120px;">
                            <div
                                style="width: 80px; height: 80px; background: #f0f0f0; border-radius: 50%; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center;">
                                <span style="font-weight: bold; color: #666;">MSU</span>
                            </div>
                        </div>
                    </div> --}}






                    <!-- University Cards -->
                    <div class="row">
                        @php
                            $university_images = ['university_1.png', 'university_2.png', 'university_3.png'];
                        @endphp
                        @foreach ($university_images as $item)
                            <div class="col-md-4">
                                <div class="university-card">
                                    <div
                                        style="height: 200px; background: url({{ url('/assets/home/images/university/' . $item) }}); display: flex; align-items: center; justify-content: center;">
                                        {{-- <h4 style="color: white;">University 1</h4> --}}
                                    </div>
                                    <div class="card-content">
                                        <div class="title-container">
                                            <img src="{{ url('/assets/home/images/university/university_pp_1.png') }}"
                                                alt="" srcset="">
                                            <h6>Title</h6>
                                        </div>
                                        <p class="text-muted small mb-3">Brief Info</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn-view">View Info</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="col-md-4">
                            <div class="university-card">
                                <div
                                    style="height: 200px; background: linear-gradient(45deg, #f093fb, #f5576c); display: flex; align-items: center; justify-content: center;">
                                    <h4 style="color: white;">University 2</h4>
                                </div>
                                <div class="card-content">
                                    <h6>Title</h6>
                                    <p class="text-muted small mb-3">Brief Info</p>
                                    <a href="#" class="btn-view">View Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="university-card">
                                <div
                                    style="height: 200px; background: linear-gradient(45deg, #4facfe, #00f2fe); display: flex; align-items: center; justify-content: center;">
                                    <h4 style="color: white;">University 3</h4>
                                </div>
                                <div class="card-content">
                                    <h6>Title</h6>
                                    <p class="text-muted small mb-3">Brief Info</p>
                                    <a href="#" class="btn-view">View Info</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div class="text-center news-section">
                        <h5>News and advertisement for earning</h5>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Inquiry Form -->
                    <div class="inquiry-form">
                        <h5 class="mb-3">Ask a Question</h5>
                        <p class="small text-muted mb-4">Need more information about courses, places, and financial data
                            related to English University in Malaysia? Please feel free to ask</p>

                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name...">
                            </div>
                            <div class="mb-3">
                                {{-- <label class="form-label" for="email">Your Email</label> --}}
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Your Email...">
                            </div>
                            <div class="mb-3">
                                {{-- <label class="form-label" for="email">Your Email</label> --}}
                                <input type="tel" name="mobile" class="form-control" placeholder="Your Number...">
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label class="form-label" for="nationality">Nationality</label>
                                    <input type="text" name="nationality" class="form-control" id="nationality"
                                        placeholder="Nationality...">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="dob">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control date" id="dob"
                                        placeholder="Date of Birth...">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="3"
                                    placeholder="Please leave your message here..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-inquiry">Send Inquiry</button>
                        </form>
                    </div>

                    <!-- Advertisement Banners -->
                    <div class="add-banner-container">
                        <img src="{{ asset('assets/home/images/add_banner_right_side.png') }}" height="400px;"
                            alt="" srcset="">
                    </div>
                    {{-- <div class="ad-banner mt-4">
                        <div style="background: #2c3e50; color: white; padding: 20px; text-align: center;">
                            <h6>OPEN DAY</h6>
                            <p class="mb-0">University Event</p>
                        </div>
                    </div>

                    <div class="ad-banner">
                        <div
                            style="background: linear-gradient(135deg, #ff6b6b, #ee5a24); color: white; padding: 20px; text-align: center;">
                            <h6>STUDY SPACE UTM</h6>
                            <p class="mb-0">Join us today!</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
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
