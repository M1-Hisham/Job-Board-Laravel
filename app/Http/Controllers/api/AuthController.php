<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequests;
use Auth;

class AuthController extends Controller
{
    public function login(LoginRequests $request)
    {
        // Validate the incoming request data
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (!Auth::guard('api')->attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Generate a new token for the authenticated user
        $token = Auth::guard('api')->attempt($credentials);

        // Return the token in the response
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
        ]);
    }

    public function refresh()
    {
        $newToken = Auth::guard('api')->refresh();

        return response()->json([
            'access_token' => $newToken,
            'token_type' => 'Bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
        ]);
    }

    public function profile()
    {
        $user = Auth::guard('api')->user();

        return response()->json($user);
    }

    public function logout()
    {
        Auth::guard('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
