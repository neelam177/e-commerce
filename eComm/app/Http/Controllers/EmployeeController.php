<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
class EmployeeController extends Controller
{
    //
    function list(){
        return Employees::all();
    }

}
