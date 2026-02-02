<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/login', function () {
    return view('login');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::post('/login',[UserController::class,'login']);