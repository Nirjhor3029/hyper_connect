@extends('layouts.signup_layout')
@section('photo_section')
    <img src="{{ asset('assets/images/sign_up.png') }}" alt="Hyper Connect Logo">
@endsection
@section('form_content')
    <h3>Sign up & become part of our community</h3>
    {{-- <form id="signupForm"> --}}
    @if (session('message'))
        <div class="alert alert-info" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class=" position-relative float-group">
            <input type="email" name="email" class="form-control" required autocomplete="email">
            <label>Email</label>
            <span class="input-field-icon">
                <i class="bi bi-envelope"></i>
            </span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class=" position-relative float-group">
            <input type="tel" name="phone" class="form-control" placeholder="" required>
            <label>Mobile</label>
            <span class="input-field-icon">
                <i class="bi bi-phone"></i>
            </span>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class=" float-group">
            <div class="position-relative ">
                <input type="password" name="password" class="form-control" id="password" placeholder="" required>
                <label>Password</label>
                <span class="input-field-icon">
                    <i class="bi bi-bi bi-eye-slash password-icon"></i>
                </span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-text text-small">
                <i class="bi bi-exclamation-circle"></i>
                Must be at least 8 characters with one uppercase letter
            </div>
        </div>
        <div class=" position-relative float-group">
            <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder=""
                required>
            <label>Confirm Password</label>
            <span class="input-field-icon">
                <i class="bi bi-bi bi-eye-slash password-icon"></i>
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
    <div class="text-center my-3">Or</div>
    <button class="google-btn">
        <img src="https://img.icons8.com/fluency/48/google-logo.png" alt="google-logo" />
        Sign up with Google
    </button>
    <p class="mt-3 text-center text-small">Already a member? <a href="/signin" class="text-danger">Sign in</a></p>
@endsection
