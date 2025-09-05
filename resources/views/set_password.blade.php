@extends('signup_layout')
@section('photo_section')
    <img src="{{ asset('assets/images/forgot_password.png') }}" alt="Hyper Connect Logo">
@endsection
@section('form_content')
    <div class="d-flex align-items-center gap-2 mb-3">
        <a href="/signin" class="text-decoration-none text-small text-danger">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    <h3 class="">Set a new Password</h3>
    <p>
        Your new password must be different from the previous password.
    </p>
    <form id="signupForm">
        <div class=" float-group">
            <div class="position-relative ">
                <input type="password" name="password" class="form-control" id="password" placeholder="" required>
                <label>Password</label>
                <span class="input-field-icon">
                    <i class="bi bi-bi bi-eye-slash password-icon"></i>
                </span>
            </div>
            <div class="form-text text-small">
                <i class="bi bi-exclamation-circle"></i>
                Must be at least 8 characters with one uppercase letter
            </div>
        </div>
        <div class=" position-relative float-group">
            <input type="password" name="confirm_password" class="form-control" id="confirmPassword" placeholder=""
                required>
            <label>Confirm Password</label>
            <span class="input-field-icon">
                <i class="bi bi-bi bi-eye-slash password-icon"></i>
            </span>
        </div>

        <button type="submit" class="btn btn-primary">Request Password</button>
    </form>
@endsection
