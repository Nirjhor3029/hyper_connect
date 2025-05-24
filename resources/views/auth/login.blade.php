@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mx-4">
            <div class="card-body p-4">
                <h1>{{ trans('panel.site_title') }}</h1>

                <p class="text-muted">{{ trans('global.login') }}</p>

    <link rel="icon" href="{{ asset('assets/images/cropped_hyper_connect_logo_32x32.png') }}" sizes="32x32">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
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
            font-size: 18px;
            opacity: 0.9;
            line-height: 1.6;
            max-width: 300px;
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
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
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

        .form-label {
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
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
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
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                        <path d="M6 12v5c3 3 9 3 12 0v-5" />
                    </svg>
                </div>
                <h1 class="hero-title">
                    {{-- {{__("HyperConnect Malaysia")}} --}}
                    {{ env('APP_NAME') }}
                </h1>
                <p class="hero-subtitle">
                    {{-- Connecting Malaysian students with global education opportunities --}}
                    {{ __('Study in Malaysia, Connect with the World') }}
                    {{-- {{__("Pathway to Global Education")}} --}}
                </p>
            </div>
        </div>

        <div class="login-right">
            <div class="login-header">
                {{-- <div class="logo">
                    HC
                </div> --}}
                <img class="logo_img" src="{{ asset('assets/images/hyper_connect_logo.png') }}" alt=""
                    srcset="" style="border-radius: 12px; margin-bottom: 20px;">
                {{-- <h2 class="login-title">Agent Portal</h2> --}}

            </div>

            <p class="login-subtitle" style="text-align: center; margin-bottom: 20px;">Sign in to manage your students
            </p>

            @if (session('message'))
                <div class="alert alert-info" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input"
                        placeholder="Enter your email address" required>

                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-input"
                        placeholder="Enter your password" required>

                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="form-row">
                    <div class="checkbox-container">
                        <input type="checkbox" id="remember" name="remember" class="checkbox">
                        <label for="remember" class="checkbox-label">Remember me</label>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                        <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>

                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">

                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-4">
                        <div class="form-check checkbox">
                            <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                            <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                {{ trans('global.remember_me') }}
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary px-4">
                                {{ trans('global.login') }}
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            @if(Route::has('password.request'))
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a><br>
                            @endif

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection