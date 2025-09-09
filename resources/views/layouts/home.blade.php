<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyper Connect - Education Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">

    <!-- Stack for page-specific CSS -->
    @stack('styles')
</head>

<body>
    <!-- Fixed Sidebar -->
    <div class="sidebar">
        <div class="sidebar-item">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-item">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-item">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-item">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-item">
            <i class="fas fa-envelope"></i>
        </div>
    </div>

    <!-- Header -->
    <header class="header" style="padding:10px 25px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a class="navbar-brand" href="#">
                        {{-- HYPER<br><small style="font-size: 14px;">CONNECT</small> --}}
                        <img src="{{ asset('assets/images/hyper_connect_logo_no_bg.png') }}" height="60px"
                            alt="Hyper Connect" srcset="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-link" href="#">Home</a>
                            <a class="nav-link" href="#">About Us</a>
                            <a class="nav-link" href="#">Services</a>
                            <a class="nav-link" href="#">Contact Us</a>
                            <a class="nav-link" href="/login">Sign In</a>
                        </div>
                    </nav>
                </div>
                {{-- <div class="col-lg-1">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                            {{ auth()->user()->name ?? 'User' }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div> --}}

            </div>
        </div>
    </header>
    <header class="" style="padding-top: 0;">
        <div class="contact-bar">
            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <img src="{{ asset('assets/home/images/social_icons/facebook.png') }}" alt=""
                        srcset="">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('assets/home/images/social_icons/instagram.png') }}" alt=""
                        srcset="">
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

    @yield('main_content')



    <div class="footer-section">
        <!-- Newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h4>Subscribe Newsletters</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <button class="btn" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="footer-links">
                            <a href="#">Home</a>
                            <a href="#">About Us</a>
                            <a href="#">Services</a>
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-end d-flex justify-content-end">
                        <div class="social-icons">
                            {{-- <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a> --}}
                            <a href="#" class="social-icon">
                                <img src="{{ asset('assets/home/images/social_icons/facebook.png') }}" alt=""
                                    srcset="">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="{{ asset('assets/home/images/social_icons/instagram.png') }}" alt=""
                                    srcset="">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="{{ asset('assets/home/images/social_icons/youtube.png') }}" alt=""
                                    srcset="">
                            </a>
                        </div>
                    </div>
                </div>
                <hr style="margin: 10px 0;color: gray;">
                {{-- <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <span class="navbar-brand" style="color: white; margin-right: 20px;">
                                HYPER<br><small style="font-size: 12px;">CONNECT</small>
                            </span>
                            <small>© 2025 All rights reserved by HyperIT</small>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <small>
                            <a href="#" style="color: #ccc; text-decoration: none; margin-right: 15px;">Terms of
                                Service</a>
                            <a href="#" style="color: #ccc; text-decoration: none;">Privacy Policy</a>
                        </small>
                    </div>
                </div> --}}
                <div class="terms-section">
                    <p>© @php echo date('Y'); @endphp All rights reserved By VenusIT.</p>
                    <img src="{{ asset('assets/images/hyper_connect_logo_no_bg.png') }}" height="60px"
                        alt="Hyper Connect" srcset="">
                    <div class="terms-links">
                        <a href="#">Terms of Service</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="{{ asset('assets/home/js/script.js') }}"></script>

    <!-- Stack for page-specific scripts -->
    @stack('scripts')

</body>

</html>
