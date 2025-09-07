@extends('layouts.signup_layout')


@section('custom_styles')
    <style>
        .otp-field {
            width: 45px;
            height: 50px;
            font-size: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            text-align: center;
            outline: none;
            transition: 0.2s;
        }

        .otp-field:focus {
            border-color: #0d6efd;
            /* bootstrap primary */
            box-shadow: 0 0 5px rgba(13, 110, 253, 0.4);
        }
    </style>
@endsection


@section('photo_section')
    <img src="{{ asset('assets/images/sign_up.png') }}" alt="Hyper Connect Logo">
@endsection
@section('form_content')
    <h3>Enter OTP</h3>
    <p>
        Please enter the verification code shared to
        <br>
        <strong>
            {{-- 91****8345 --}}
            {{ session('email') ?? ($email ?? 'your email address') }}
        </strong>
    </p>

    <form id="" method="POST" action="{{ route('student.otp.verify') }}">
        @csrf
        {{-- <div class=" position-relative float-group">
            <input type="email" name="email" class="form-control"  required>
            <label>Email</label>
            <span class="input-field-icon">
                <i class="bi bi-envelope"></i>
            </span>
        </div> --}}
        <input type="hidden" name="email" value="{{ session('email') ?? ($email ?? '') }}">
        <div class="otp-inputs d-flex  gap-4 mb-3">
            <input type="text" name="otp[]" maxlength="1" class="otp-field form-control text-center"
                style="border-color: {{ session('error') ? 'red' : '' }}" />
            <input type="text" name="otp[]" maxlength="1" class="otp-field form-control text-center"
                style="border-color: {{ session('error') ? 'red' : '' }}" />
            <input type="text" name="otp[]" maxlength="1" class="otp-field form-control text-center"
                style="border-color: {{ session('error') ? 'red' : '' }}" />
            <input type="text" name="otp[]" maxlength="1" class="otp-field form-control text-center"
                style="border-color: {{ session('error') ? 'red' : '' }}" />
        </div>
        @if (session('error'))
            {{-- <div class="alert alert-danger" role="alert"> --}}
                <small class="text-danger">{{ session('error') }}</small>
            {{-- </div> --}}
        @endif
        <p class="mt-3 text-center text-small">
            Still not received OTP? <a href="/resend-otp" class="text-danger">Resend OTP</a>
        </p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
