<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {return view('home');})->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/admin', function () {return view('admin.dashboard');})->name('dashboard');

Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::get('/admin/users/list', [UserController::class, 'list'])->name('admin.users.index');
