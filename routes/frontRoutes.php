<?php

use App\Http\Controllers\Front\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'front.'], function () {
    Route::get('/home2', [PageController::class, 'home'])->name('index');

    Route::group(['as' => 'recruiters.', 'prefix' => 'recruiters'], function () {
        Route::get('/course-search', [PageController::class, 'recruitersCourseSearch'])->name('course-search');

        Route::get('/application-management', [PageController::class, 'recruitersApplicationManagement'])->name('application-management');
        Route::get('/student-management', [PageController::class, 'recruitersStudentManagement'])->name('student-management');
        Route::get('/support-training', [PageController::class, 'recruitersSupportTraining'])->name('support-training');
        Route::get('/security', [PageController::class, 'recruitersSecurity'])->name('security');

        Route::get('/100-commission', [PageController::class, 'recruiters100Commission'])->name('100-commission');
    });

    Route::get('/search-course', [PageController::class, 'searchCourse'])->name('search-course');

    Route::get('/institution-directory', [PageController::class, 'institutionDirectory'])->name('institution-directory');

    Route::get('/recruiter-success-stories', [PageController::class, 'recruiterSuccessStories'])->name('recruiter-success-stories');

    Route::get('/pricing-recruiters-new', [PageController::class, 'recruitersPricingNew'])->name('pricing-recruiters-new');
    Route::get('/mobile-app', [PageController::class, 'mobileApp'])->name('mobile-app');
    // Route::get('/recruiter-case-studies', [PageController::class, 'recruiterCaseStudies'])->name('recruiter-case-studies');
});
// Route::get('/home2', [PageController::class, 'home'])->name('front.home');
