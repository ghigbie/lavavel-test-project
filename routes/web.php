<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function() {
//     return view('home');
// });

Route::get('/about', function() {
    return view('about');
});

Route::get('/', [UserController::class, "displayCorrectHomepage"]);
Route::post('/login', [UserController::class, "login"]);
Route::post('/logout', [UserController::class, "logout"]);
Route::post('/register', [UserController::class, "register"]);
Route::get('/registration-confirmation', [UserController::class, "registrationConfirmation"]);