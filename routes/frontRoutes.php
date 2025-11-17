<?php

use App\Http\Controllers\Front\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'front.'], function () {
    Route::get('/home2', [PageController::class, 'home'])->name('index');

    Route::group(['as' => 'recruiters.'], function () {
        Route::get('/recruiters/course-search', [PageController::class, 'recruitersCourseSearch'])->name('course-search');
        Route::get('/recruiters/application-management', [PageController::class, 'recruitersApplicationManagement'])->name('application-management');
    });
    
    Route::get('/search-course', [PageController::class, 'searchCourse'])->name('search-course');
});
// Route::get('/home2', [PageController::class, 'home'])->name('front.home');
