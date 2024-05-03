<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {return view('home');})->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/admin', function () {return view('admin.dashboard');})->name('dashboard');

Route::get('/admin/users/index', [UserController::class, 'index'])->name('admin.users.index'); // Listar usuarios
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create'); // Mostrar formulario para crear usuario
Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store'); // Guardar usuario en la base de datos
Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit'); // Mostrar formulario para editar usuario
Route::post('/admin/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update'); // Actualizar usuario en la base de datos

// Temp
Route::get('/admin/test', function () {return view('admin.test');})->name('admin.test');