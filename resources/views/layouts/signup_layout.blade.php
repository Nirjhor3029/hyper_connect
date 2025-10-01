<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyper Connect - Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/signup_custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @yield('custom_styles')
</head>

<body>
    <div class="main">

        <div class="container-fluid" style="padding:0 30px;">
            <div class="row w-100 px-5">
                <div class="col-12 text-start">
                    <a href="/" rel="noopener noreferrer">
                        <img src="{{ asset('assets/images/hyper_connect_logo.png') }}" height="100px"
                            alt="Hyper Connect Logo" class="logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid signup-section">
            <div class="row w-100">
                <!-- Left Side -->
                <div class="col-lg-6  left-panel mb-4 mb-md-0">
                    <div class="mb-5 photo-section">
                        @yield('photo_section')
                    </div>

                    <h5 class="fw-bold mt-4" style="color: gray;font-size: 2rem;">Simplified Admission Process</h5>
                    <ul class="list-unstyled features text-start d-inline-block">
                        <li class="list-item"><span class="red-tick">&#10004;</span> Selection Assistance</li>
                        <li class="list-item"><span class="red-tick">&#10004;</span> Admission Assistance</li>
                        <li class="list-item"><span class="red-tick">&#10004;</span> Pre-departure Assistance</li>
                    </ul>
                </div>

                <!-- Right Side -->
                <div class="col-lg-6">
                    <div class="signup-box-wrapper">
                        <div class="signup-box">
                            @yield('form_content')
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS + jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password match validation
        $("#signupForm").on("submit", function(e) {
            e.preventDefault();
            let password = $("#password").val();
            let confirmPassword = $("#confirmPassword").val();
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return;
            }
            alert("Form submitted successfully!");
        });

        // Toggle password visibility
        $(".input-field-icon .password-icon").on("click", function() {
            let input = $(this).closest(".position-relative").find("input");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
                $(this).removeClass("bi-eye-slash").addClass("bi-eye");
            } else {
                input.attr("type", "password");
                $(this).removeClass("bi-eye").addClass("bi-eye-slash");
            }
        });


        $(".float-group input").on("focus blur", function() {
            console.log("called");

            if ($(this).val() !== "") {
                $(this).addClass("not-empty");
            } else {
                $(this).removeClass("not-empty");
            }
        });
    </script>
</body>

</html>
