@extends('layouts.signup_layout')
@section('photo_section')
    <img src="{{ asset('assets/images/forgot_password.png') }}" alt="Hyper Connect Logo">
@endsection
@section('form_content')
    <div class="d-flex align-items-center gap-2 mb-3">
        <a href="/signin" class="text-decoration-none text-small text-danger">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    <h3 class="">Forgot password?</h3>
    <p>
        Enter the email address associated with your account and we'll send you a link to reset your password.
    </p>
    <form id="signupForm">
        <div class="float-group  position-relative">
            <input type="email" class="form-control" placeholder="" required>
            <label>Email</label>
            <span class="input-field-icon">
                <i class="bi bi-envelope"></i>
            </span>
        </div>

        <button type="submit" class="btn btn-primary">Request rest link</button>
    </form>
@endsection
