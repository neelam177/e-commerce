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
    // function addUser(Request $request) // file user-form.blade.php logic
    // {
    //     // return $request; // it returns all data of form
    //     echo "User Name is $request->username"; //it returns only one data
    //     echo "<br>";
    //     echo "User email is $request->email";
    //     echo "<br>";
    //     echo  "User city is $request->city";
    //     echo "<br>";
    //     print_r("user skill is $request->skill"); // because it provides multiple value

    // }

    // option 1 simple validation 
    // function adduser(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required |min:3 |max:10',
    //         'email' => 'required | email',
    //         'city' => 'required | max:10',
    //         'skill' => 'required',
    //     ]);
    //     return $request;
    // }
    // option 2 custom validation
    function adduser(Request $request)
    {
        $request->validate([
            'username' => 'required |min:3 |max:10',
            'email' => 'required | email',
            'city' => 'required | max:10 | uppercase',
            'skill' => 'required',
        ], [
            'username.required' => 'User field can not be empty',
            'username.min' => 'User name have to be at least 3 character',
            'username.max' => 'User name must be 10 character',
            'email.email' => 'not a valid email',
            'city.uppercase' => 'city should be in uppercase only',

        ]);
        return $request;
    }
    function adduser_1(Request $request)
    {     // file user-form_1.blade.php logic
        // return $request;
        echo $request->gender;
        echo "<br>";
        echo $request->city;
        echo "<br>";

        // echo $request->skill; it gives error it takes multiple values in dropdown so we can use print_r
        print_r($request->skill); // because it provides multiple value
    }
}
