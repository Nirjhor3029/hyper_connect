<?php

use App\Http\Controllers\Admin\UniversitiesController;
use App\Http\Controllers\ApplicationFormPageController;
use App\Http\Controllers\Student\StudentUploadController;
use App\Http\Controllers\StudentAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/test-students', function () {
    return 'List of students';
});



Route::prefix('')->name('student.')->group(function () {
    // Route::get('login', [StudentAuthController::class, 'showLoginForm'])->name('login');
    // Route::post('login', [StudentAuthController::class, 'login']);
    // Route::get('register', [StudentAuthController::class, 'showRegisterForm'])->name('register');
    // Route::post('register', [StudentAuthController::class, 'register'])->name('register.submit');

    // Route::post('send-otp', [StudentAuthController::class, 'send'])->name('sendOtp');
    // Route::post('/send-otp/verify', [StudentAuthController::class, 'verify'])->name('verifyOtp');

    Route::get('verify-otp', [StudentAuthController::class, 'verifyOtpFormShow'])->name('otp.form');
    Route::post('verify-otp', [StudentAuthController::class, 'verifyOtp'])->name('otp.verify');
    // Route::get('/signup-otp', function () {
    //     return view('auth.signup_otp');
    // });


    Route::post('/upload', [StudentUploadController::class, 'store'])->name('upload.store');
    Route::delete('/upload/remove/{id}', [StudentUploadController::class, 'destroy'])->name('upload.destroy');



    Route::middleware(['auth:student', 'verified'])->group(function () {

        Route::get('/application-form', [ApplicationFormPageController::class, 'index'])->name('application.form');



        Route::get('/dashboard', [StudentAuthController::class, 'dashboard'])->name('dashboard');
        Route::put('/data-update/{student}', [StudentAuthController::class, 'dataUpdate'])->name('data.update');
        Route::get('/data-show', [StudentAuthController::class, 'dataShow'])->name('data.show');
        Route::get('/data-edit', [StudentAuthController::class, 'dataEdit'])->name('data.edit');
        Route::any('logout', [StudentAuthController::class, 'logout'])->name('logout');
        Route::get('profile', [StudentAuthController::class, 'profile'])->name('profile.index');
        Route::post('/profile/update', [StudentAuthController::class, 'updateProfile'])->name('profile.update');
        Route::post('/profile/password', [StudentAuthController::class, 'updatePassword'])->name('profile.password');
        Route::post('/profile/photo-upload', [StudentAuthController::class, 'uploadPhoto'])->name('profile.photo.upload');

        Route::get('/university-show', [UniversitiesController::class, 'universityShow'])->name('university.show');
        Route::get('/university/{id}/courses', [UniversitiesController::class, 'showCourses'])->name('university.courses');
        Route::get('/university/{id}/details', [UniversitiesController::class, 'universityDetails'])->name('university.details');
    });
});
