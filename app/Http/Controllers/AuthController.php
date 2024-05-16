<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // login

    public function login(Request $request)
    {
        // validation
        $credentails = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentails)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->with(['error' => 'The provided credentials do not match with our records.']);
    }
}
