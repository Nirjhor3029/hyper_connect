<?php

use App\Http\Controllers\Front\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/home2', [PageController::class, 'home'])->name('front.home');
