<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     * @param  NA
     * @return void
     */
    public function googleLogin()
    {
        echo "Redirecting to Google for authentication...";
        // Here you would typically redirect to Google's OAuth page
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google after authentication.
     * @param  NA
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            // $user = Socialite::driver('google')->stateless()->user();
            $googleUser = Socialite::driver('google')->user();
            // dd($googleUser);
            // $user->token;
            $user = User::where('google_id', $googleUser->id)->first();
            if ($user) {
                Auth::login($user);
                return redirect()->route('dashboard')->with('success', 'Logged in with Google successfully!');
            } else {
                // Create a new user or handle the case where the user does not exist
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    // You might want to set a default password or handle it differently
                    'password' => Hash::make($googleUser->id),
                    // 'password' => bcrypt(str()->random(16)),
                ]);

                if ($newUser) {
                    Auth::login($newUser);
                    return redirect()->route('dashboard')->with('success', 'Logged in with Google successfully!');
                }
            }
            // Here you would typically find or create a user in your database
            // and log them in, then redirect to the intended page
            // return redirect()->route('home')->with('success', 'Logged in with Google successfully!');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Failed to authenticate with Google.');
        }
    }
}
