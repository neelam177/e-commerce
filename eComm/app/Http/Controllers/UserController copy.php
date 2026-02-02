<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $request)
    {
        // API Response format
        try {
            // Check if email exists
            $user = user::where('email', $request->email)->first();
            
            if ($user) {
                return response()->json([
                    'success' => true,
                    'message' => 'User found',
                    'data' => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email
                    ]
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'User not found',
                    'data' => null
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Database error: ' . $e->getMessage(),
                'data' => null
            ], 500);
        }
    }
}
