<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Notification; // your Notification model
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share notifications with all views
        // View::composer('*', function ($view) {
        // View::composer('layouts.home', function ($view) {
        //     $notifications = auth()->check()
        //         ? Notification::where('user_id', auth()->id())
        //         ->latest()
        //         ->take(5)
        //         ->get()
        //         : collect(); // empty collection if not logged in

        //     $view->with('notifications', $notifications);
        // });

        View::composer('*', function ($view) {

            $notifications = collect();

            if (Auth::guard('student')->check()) {
                // Logged in as student
                $notifications = Notification::where('student_id', Auth::guard('student')->id())
                    ->latest()
                    ->take(5)
                    ->get();
            } elseif (Auth::check()) {
                // Default user guard
                $notifications = Notification::where('user_id', Auth::id())
                    ->latest()
                    ->take(5)
                    ->get();
            }

            $view->with('notifications', $notifications);
        });
    }
}
