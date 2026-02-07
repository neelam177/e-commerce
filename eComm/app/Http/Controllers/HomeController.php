<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function show()
    {
        // return view('home'); or 
        return to_route('hm');
    }
    function user()
    {
        return to_route('user', ["name"=>"neelam"]);
    }
}
