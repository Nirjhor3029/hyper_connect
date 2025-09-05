@extends('signup_layout')
@section('photo_section')
    <img src="{{ asset('assets/images/sign_in.png') }}" alt="Hyper Connect Logo">
@endsection
@section('form_content')
    <div class="d-flex align-items-center gap-2 mb-3">
        <a href="/signin" class="text-decoration-none text-small text-danger">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>
    
    <h3>Sign in</h3>
    <form id="signupForm">
        <div class="float-group  position-relative">
            <input type="tel" class="form-control" placeholder="" required>
            <label>Mobile</label>
            <span class="input-field-icon">
                <i class="bi bi-phone"></i>
            </span>
        </div>
        
        <button type="submit" class="btn btn-primary">Generate OTP</button>
    </form>
    
@endsection
