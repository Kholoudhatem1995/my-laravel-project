<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;
//use App\Http\Controllers\AuthController;


/*
Route::middleware('auth:sanctum')->get('/', function () {
    return view('welcome');
})->name('home');
*/

/*
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');