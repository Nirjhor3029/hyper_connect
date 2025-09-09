@extends('layouts.home')

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






                    @php
                        $university_logos = [
                            [
                                'image_path' => 'university_logo_1.png',
                                'href' => 'https://www.apu.edu.my',
                            ],
                            [
                                'image_path' => 'university_logo_2.png',
                                'href' => 'https://cyberjaya.edu.my',
                            ],
                            [
                                'image_path' => 'university_logo_3.png',
                                'href' => 'https://www.msu.edu.my',
                            ],
                            [
                                'image_path' => 'university_logo_4.png',
                                'href' => 'https://sunwayuniversity.edu.my',
                            ],
                            [
                                'image_path' => 'university_logo_5.png',
                                'href' => 'https://www.ucsiuniversity.edu.my',
                            ],
                            [
                                'image_path' => 'university_logo_6.png',
                                'href' => 'https://mahsa.edu.my',
                            ],
                            [
                                'image_path' => 'university_logo_7.png',
                                'href' => 'https://binary.edu.my',
                            ],
                            [
                                'image_path' => 'university_logo_8.png',
                                'href' => 'https://www.perdanauniversity.edu.my',
                            ],
                            [
                                'image_path' => 'university_logo_9.png',
                                'href' => 'https://university.taylors.edu.my/en.html',
                            ],
                            [
                                'image_path' => 'university_logo_10.png',
                                'href' => 'https://www.mmu.edu.my',
                            ],
                        ];
                        // $university_logos = range(1, 10);
                    @endphp
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
                                <input type="tel" name="mobile" class="form-control"
                                    placeholder="Your Number...">
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
                                <textarea class="form-control" name="message" id="message" rows="3" placeholder="Please leave your message here..."></textarea>
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
