<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeControllerPrefix;
use App\Http\Controllers\StudentControllerPrefix;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;



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
Route::view('about/{name}', 'about');



Route::view('home/profile/user', 'home')->name('hm');
Route::view('home/profile/{name}', 'home')->name('user');


Route::get('show', [HomeController::class, 'show']);
Route::get('user', [HomeController::class, 'user']);


// Route::view('student/home', 'homePrifix');
// Route::get('student/show', [HomeControllerPrefix::class, 'show']);
// Route::get('student/add', [HomeControllerPrefix::class, 'add']);


// Route Group Prefix 
// there are 3 type of route grouping controller 
//1st route Prefix 
// Route::prefix('student')->group(function () {
Route::prefix('student/india')->group(function () {  //double prefix also work and more
    Route::view('/home', 'homePrifix');
    Route::get('/show', [HomeControllerPrefix::class, 'show']);
    Route::get('/add', [HomeControllerPrefix::class, 'add']);
});
//2nd route controller 
// Route::get('showStudent', [StudentControllerPrefix::class, 'showStudent']);
// Route::get('addStudent', [StudentControllerPrefix::class, 'addStudent']);
// Route::get('deleteStudent', [StudentControllerPrefix::class, 'deleteStudent']);

Route::controller(StudentControllerPrefix::class)->group(function () {
    Route::get('showStudent', 'showStudent');
    Route::get('showStudent/{name}', 'showStudent');  // with parameter
    Route::get('addStudent', 'addStudent');
    Route::get('deleteStudent', 'deleteStudent');
});


// Route::view('homeMiddleware', 'homeMiddleware')->middleware('check1');
// Route::view('aboutMiddleware', 'abouteMiddleware');
// Route::view('list', 'abouteMiddleware');
// Route::view('store', 'abouteMiddleware');

// Group middleware
// Route::middleware('check1')->group(function () {
//     Route::view('homeMiddleware', 'homeMiddleware');
//     Route::view('aboutMiddleware', 'abouteMiddleware');
//     Route::view('list', 'abouteMiddleware');
//     Route::view('store', 'abouteMiddleware');
// });


// we can also use middleware in single routes
// Route::view('homeroutes','homeMiddleware')->middleware(AgeCheck::class);
// we can also use middleware in multiple routes

Route::view('homeroutes','homeMiddleware')->middleware([AgeCheck::class,CountryCheck::class]);
//we can also check only single middleware
Route::view('aboutroutes','homeMiddleware')->middleware([CountryCheck::class]);


