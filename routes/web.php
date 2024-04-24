<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');