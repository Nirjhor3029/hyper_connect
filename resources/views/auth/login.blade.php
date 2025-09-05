@extends('layouts.signup_layout')
@section('photo_section')
    <img src="{{ asset('assets/images/sign_in.png') }}" alt="Hyper Connect Logo">
@endsection
@section('form_content')
    <h3>Sign in</h3>
    @if (session('message'))
        <div class="alert alert-info" role="alert">
            {{ session('message') }}
        </div>
    @endif
    {{-- <form id="signupForm"> --}}
    <form id="loginForm" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group float-group  position-relative">
            <input type="email" class="form-control form-input" placeholder="" id="email" name="email" required>
            <label>Email</label>
            <span class="input-field-icon">
                <i class="bi bi-envelope"></i>
            </span>
            @if ($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
        <div class="form-group float-group  position-relative">
            <input type="password" class="form-control form-input" id="password" name="password" placeholder="" required>
            <label for="password">Password</label>
            <span class="input-field-icon">
                <i class="bi bi-bi bi-eye-slash password-icon"></i>
            </span>
            @if ($errors->has('password'))
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe" name="remember">
                <label class="form-check-label" for="rememberMe">
                    Remember me
                </label>
            </div>
            <div class="text-end">
                <a href="/forgot-password" class="text-small text-decoration-none text-danger">Forgot password?</a>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <div class="text-center my-3">Or</div>
    <div style="display: flex; gap: 10px;">
        <button class="google-btn">
            <img src="https://img.icons8.com/fluency/48/google-logo.png" alt="google-logo" />
            Google
        </button>
        <a href="/signin-otp" class="btn btn-default google-btn">
            Sign in with OTP
        </a>
    </div>
    <p class="mt-3 text-center text-small">New to Canam? <a class="text-danger" href="/signup">Create an account</a></p>
@endsection
