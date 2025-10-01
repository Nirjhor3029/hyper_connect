<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyper Connect - Education Platform</title>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">



    {{-- CDNs in Local: start --}}
    <link rel="stylesheet" href="{{ asset('assets/home/css/cdns/bootstrap-5.3.0-bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/home/css/cdns/font-awesome-6.4.0-all.min.css') }}"> --}}
    {{-- CDNs in Local: end --}}

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    <link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">

    <!-- Stack for page-specific CSS -->
    @stack('styles')

    <style>
        .nav-link.active {
            font-weight: bold;
            color: #007bff !important;
        }
    </style>
</head>

<body>
    <!-- Fixed Sidebar -->
    @include('layouts._partials.sidebar')


    @yield('header')



    @yield('main_content')


    <div class="rounded-edge">
    </div>
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
                            <input type="email" id="newsletter-email" class="form-control"
                                placeholder="Enter your email">
                            <button class="btn" id="subscribe-btn" type="button">Subscribe</button>
                        </div>

                        <!-- Success/Error Message -->
                        <small id="newsletter-message" class="text-success" style="display:none;"></small>
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
                            <a href="{{ route('home') }}">Home</a>
                            <a href="#">About Us</a>
                            <a href="#">Services</a>
                            <a href="{{ route('contactUs') }}">Contact Us</a>
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
    {{-- CDNs local: Start --}}
    <script src="{{ asset('assets/home/js/cdns/bootstrap-5.3.0.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/cdns/jquery-3.7.0.min.js') }}"></script>
    {{-- CDNs local: End --}}

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> --}}

    <script src="{{ asset('assets/home/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            
            $('#subscribe-btn').on('click', function() {
                let email = $('#newsletter-email').val();
                let messageBox = $('#newsletter-message');


                $.ajax({
                    url: "{{ route('newsletters.subscribe') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        email: email
                    },
                    success: function(response) {
                        messageBox
                            .removeClass("text-danger")
                            .addClass("text-success")
                            .text(response.message)
                            .show();
                        $('#newsletter-email').val(''); // clear input
                    },
                    error: function(xhr) {
                        let errorMsg = "Something went wrong!";
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            errorMsg = Object.values(xhr.responseJSON.errors)[0][0];
                        }
                        messageBox
                            .removeClass("text-success")
                            .addClass("text-danger")
                            .text(errorMsg)
                            .show();
                    }
                });
            });
        });
    </script>

    <!-- Stack for page-specific scripts -->
    @stack('scripts')


</body>

</html>
