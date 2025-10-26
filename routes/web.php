<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\ContactController;

use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\NewsletterController;

use App\Http\Controllers\ApplicationFormPageController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\ContactUsPageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Mails\MailController;
use App\Http\Controllers\OnlineApplicationPageController;
use App\Http\Controllers\ProgramPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


require __DIR__.'/studentRoutes.php';
require __DIR__.'/adminRoutes.php';


// Test Design pages
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('auth.signin');
});
Route::get('/signin-otp', function () {
    return view('auth.signin_otp');
});
Route::get('/forgot-password', function () {
    return view('forgot_password');
});
Route::get('/set-password', function () {
    return view('set_password');
});

Route::get('/', [LandingPageController::class, 'index'])->name('home');

Route::get('/contact-us', [ContactUsPageController::class, 'index'])->name('contactUs');
Route::post('/contact-us', [ContactController::class, 'storeByAjax'])->name('contactUs.storeByAjax');

Route::get('/programs', [ProgramPageController::class, 'index'])->name('programs');
Route::get('/programs/filter', [ProgramPageController::class, 'filter'])->name('programs.filter');


Route::get('/online-application', [OnlineApplicationPageController::class, 'index'])->name('online-application');
Route::post('/application/store', [OnlineApplicationPageController::class, 'store'])->name('application.store');


// Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('/send-mail', [MailController::class, 'sendTestMail']);
Route::get('/send-otp-by-mail', [MailController::class, 'sendOtpByMail']);

Route::post('/newsletter/subscribe', [NewsletterController::class, 'storeByAjax'])->name('newsletters.subscribe');
Route::post('/inquiries/storeByAjax', [InquiryController::class, 'storeByAjax'])->name('inquiries.storeByAjax');



// Auth::routes(['register' => false]);
Auth::routes(['verify' => true]);

Route::controller(SocialiteController::class)->as('auth.')->group(function () {
    Route::get('auth/google', 'googleLogin')->name('google');
    Route::get('auth/google-callback', 'handleGoogleCallback')->name('google.callback');
});
Route::get('auth/google', [SocialiteController::class, 'googleLogin'])->name('auth.google');

Route::group(['prefix' => 'man-access', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminLoginController::class, 'login']);

    Route::any('logout', [AdminLoginController::class, 'logout'])->name('logout');
});
// Route::group(['prefix' => 'man-access', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});



