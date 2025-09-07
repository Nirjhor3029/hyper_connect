<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        //  dd($request->all());
        // $credentials = $request->only('phone', 'password');
        $credentials = $request->only('email', 'password');

        // dd(Auth::guard('admin')->user());
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('message', 'You have been logged out.');
    }
}
