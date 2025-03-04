<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegister() {
        return view("auth.register");
    }

    public function showLogin() {
        return view("auth.login");
    }

    public function register(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed' // confirmed -> it compares password with password confirmation
        ]);

        $user = User::create($validated);

        Auth::login($user); // make session in browser to login user after registering

        return redirect()->route('ninjas.index');
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate(); // Protects you from session fixation attack

            return redirect()->route('ninjas.index');
        };

        throw ValidationException::withMessages([
            'credentials' => 'Sorry, incorrect credentials!'
        ]);
    }

    public function logout(Request $request) {
        Auth::logout(); // logout current session user

        // removes all data associated with the session
        $request->session()->invalidate(); 

        // regenerate csrf token for next session, any form that use the prev csrf token will get rejected
        $request->session()->regenerateToken(); 

        return redirect()->route('show.login');
    }
}
