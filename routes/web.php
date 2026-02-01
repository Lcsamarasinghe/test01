<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
use App\Http\Controllers\AuthController;

Route::get('register', [AuthController::class, 'registerForm'])->name('registerForm');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
