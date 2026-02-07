<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllerPrefix extends Controller
{
    //
    function show(){
         return "student list";
    }
    function add(){
        return "add student";
    }
}
