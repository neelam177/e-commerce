<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::post('/login', [UserController::class, 'login']);


Route::view('user-form', 'user-form');

Route::post('adduser', [UserController::class, 'addUser']);

Route::view('user-form_1', 'user-form_1');

Route::post('adduser_1', [UserController::class, 'adduser_1']);


Route::view('home', 'home');
Route::view('user', 'home');

Route::view('about', 'about');
