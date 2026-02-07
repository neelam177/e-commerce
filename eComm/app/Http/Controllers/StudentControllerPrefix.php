<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentControllerPrefix extends Controller
{
    //
    // function showStudent()
    // {
    //     return "student list";
    // }
    function showStudent($name)
    {
        return "name is $name";
    }
    function addStudent()
    {
        return "student add";
    }
    function deleteStudent()
    {
        return "student delete";
    }
}
