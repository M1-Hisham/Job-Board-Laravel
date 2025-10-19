<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequests;
use App\Http\Requests\SignupRequests;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    // signup (Get), signup (Post), login (Get), login (Post), logout (Post)
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function signup(SignupRequests $request)
    {

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // login the user
        Auth::login($user);

        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequests $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }



}
