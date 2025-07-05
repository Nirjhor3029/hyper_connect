<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ env('APP_NAME') }} – Study Abroad
    </title>

    <link rel="icon" href="{{ asset('assets/images/cropped_hyper_connect_logo_32x32.png') }}" sizes="32x32">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #022c68;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            min-height: 600px;
            display: flex;
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-left {
            flex: 1;
            background: #355EA9;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px 40px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(-60px, -60px);
            }
        }

        .hero-content {
            text-align: center;
            z-index: 1;
        }

        .hero-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            backdrop-filter: blur(10px);
        }

        .hero-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 15px;
            opacity: 0.9;
            line-height: 1.6;
            max-width: 300px;
            margin-left: 50px;
        }

        .login-right {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: #022c68;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .login-title {
            font-size: 28px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .login-subtitle {
            color: #6b7280;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #374151;
            font-size: 14px;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }

        .form-input:focus {
            outline: none;
            border-color: #4f46e5;
            background: white;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox {
            width: 18px;
            height: 18px;
            accent-color: #4f46e5;
        }

        .checkbox-label {
            font-size: 14px;
            color: #6b7280;
        }

        .forgot-password {
            color: #4f46e5;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #3730a3;
        }

        .login-button {
            width: 100%;
            padding: 16px;
            background: #355EA9;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(79, 70, 229, 0.3);
        }

        .login-button:active {
            transform: translateY(0);
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .login-button:hover::before {
            left: 100%;
        }



        .logo_img {
            width: 250px;
            height: auto;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                max-width: 400px;
            }

            .login-left {
                padding: 40px 20px;
                min-height: 300px;
            }

            .login-right {
                padding: 40px 30px;
            }

            .hero-title {
                font-size: 24px;
            }

            .login-title {
                font-size: 24px;
            }

            .logo_img {
                width: 200px;
                height: auto;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
<div class="login-container">
    <div class="login-left">
        <div class="hero-content">
            <div class="hero-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                    <path d="M6 12v5c3 3 9 3 12 0v-5" />
                </svg>
            </div>
            <h1 class="hero-title">{{ trans('panel.site_title') }}</h1>
            <p class="hero-subtitle">{{ __('Connecting to a world of opportunities at hyper speed') }}</p>
        </div>
    </div>

    <div class="login-right">
        <img class="logo_img" src="{{ asset('assets/images/hyper_connect_logo.png') }}" alt=""
             style="border-radius: 12px; margin-bottom: 20px;">

        <div class="hero-content">
            <h1 class="hero-title">Student Registration</h1>
            <p class="hero-subtitle">Join and access your student dashboard</p>
        </div>

        @if (session('message'))
            <div class="alert alert-info">{{ session('message') }}</div>
        @endif

        <form method="POST" action="{{ route('student.register.submit') }}" id="registrationForm">
            @csrf
            <div class="phone-group">
                {{-- Country Dropdown --}}
                <div class="form-group ">
                    <label class="required" for="country_id">Country</label>
                    <select name="country_id" id="country" class="form-input select2" required>
                        <option value="">Select Country</option>
                        @foreach($countries as $id => $name)
                            <option value="{{ $id }}" data-prefix="{{ $prefixes[$id] ?? '' }}" {{ old('country_id') == $id ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                    @error('country_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                {{-- Phone Input --}}
                <div class="form-group ">
                    <label for="phone">Phone Number (WhatsApp)</label>
                    <div style="display: flex;">
                        <input type="text" id="phone_prefix" readonly class="form-input" style="width: 100px; margin-right: 10px;">
                        <input type="text" name="phone" id="phone" class="form-input" required style="flex: 1;">
                    </div>
                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    <button type="button" id="sendOtpBtn" class="login-button" style="margin-top:10px;">Send OTP</button>
                </div>

            </div>





            {{-- Step 2: OTP --}}
            <div class="form-group otp-group" style="display: none;">
                <label for="otp">Enter OTP</label>
                <input type="text" name="otp" id="otp" class="form-input" required>
                @error('otp')
                <div class="invalid-feedback">{{ $message }}</div> @enderror
                <button type="button" id="verifyOtpBtn" class="login-button" style="margin-top:10px;">Verify OTP
                </button>
            </div>

            {{-- Step 3: Other Registration Fields --}}
            <div id="registration-fields" style="display: none;">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-input" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email (optional)</label>
                    <input type="email" name="email" class="form-input" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-input" required>{{ old('address') }}</textarea>
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group" style="position: relative;">
                    <label for="password">Create Password</label>
                    <input type="password" name="password" id="password" class="form-input" required>
                    <span class="toggle-password" onclick="togglePassword('password')"
                          style="position:absolute; right:10px; top:38px; cursor:pointer;">
        👁️
    </span>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group" style="position: relative;">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-input"
                           required>
                    <span class="toggle-password" onclick="togglePassword('password_confirmation')"
                          style="position:absolute; right:10px; top:38px; cursor:pointer;">
        👁️
    </span>
                </div>


                <button type="submit" class="login-button">Register</button>
            </div>
        </form>

        <div style="margin-top: 20px; text-align: center; ">
            <a href="{{ route('student.login') }}"> <span
                   >Already registered? Login here </span></a>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sendOtpBtn = document.getElementById('sendOtpBtn');
        const verifyOtpBtn = document.getElementById('verifyOtpBtn');
        const phoneInput = document.getElementById('phone');
        const otpInput = document.getElementById('otp');
        const countrySelect = document.getElementById('country');
        const prefixInput = document.getElementById('phone_prefix');

        const phoneGroup = document.querySelector('.phone-group');
        const otpGroup = document.querySelector('.otp-group');
        const registrationFields = document.getElementById('registration-fields');

        // ✅ Set prefix on load and on change
        function updatePrefix() {
            const selectedOption = countrySelect.options[countrySelect.selectedIndex];
            const prefix = selectedOption.getAttribute('data-prefix') || '';
            prefixInput.value = prefix;
        }

        updatePrefix(); // Initial call
        countrySelect.addEventListener('change', updatePrefix);

        // ✅ Send OTP
        sendOtpBtn.addEventListener('click', function () {
            const prefix = prefixInput.value;
            const phoneNumber = phoneInput.value.trim();
            const phone = prefix + phoneNumber;

            if (!countrySelect.value) {
                alert('Please select a country.');
                return;
            }

            if (!phoneNumber) {
                alert('Please enter a phone number.');
                return;
            }

            fetch('{{ route('student.sendOtp') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ phone })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert("OTP sent successfully!");
                        // Hide phone + country, show OTP
                        phoneGroup.style.display = 'none';
                        otpGroup.style.display = 'block';
                    } else if (data.status === 'error') {
                        alert(data.message || "OTP sending failed!");
                    } else {
                        alert("Unexpected response. Please try again.");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Something went wrong while sending OTP.");
                });
        });

        // ✅ Verify OTP
        verifyOtpBtn.addEventListener('click', function () {
            const prefix = prefixInput.value;
            const phoneNumber = phoneInput.value.trim();
            const phone = prefix + phoneNumber;
            const otp = otpInput.value.trim();

            if (!otp) {
                alert('Please enter the OTP.');
                return;
            }

            fetch('{{ route('student.sendOtp') }}/verify', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ phone, otp })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'verified') {
                        alert('OTP verified successfully!');
                        otpGroup.style.display = 'none';
                        registrationFields.style.display = 'block';
                    } else {
                        alert('Invalid OTP. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Something went wrong during OTP verification.");
                });
        });

        // ✅ Toggle Password Visibility
        window.togglePassword = function (id) {
            const field = document.getElementById(id);
            field.type = field.type === 'password' ? 'text' : 'password';
        }
    });
</script>
</body>

</html>
