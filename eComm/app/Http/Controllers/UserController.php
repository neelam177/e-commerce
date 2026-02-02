<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $request)
    {
        try {
            return User::where(['email' => $request->email])->first();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Database table not found. Please run migrations first.']);
        }
    }
}
