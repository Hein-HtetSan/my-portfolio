<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// models
use App\Models\User;

class AuthController extends Controller
{
    // login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials))
        {
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->accessToken;

            return response()->json(['token' => $token], 200);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // get all users
    public function get_users()
    {
        try {
            $data = User::select('name', 'email')->get();
            return response()->json(['success' => true, 'data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
