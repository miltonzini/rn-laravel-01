<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\PreventBackHistoryMiddleware;

Route::get('/', function () {return view('home');})->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Mostrar formulario
Route::post('/login-user', [LoginController::class, 'login'])->name('login-user');
Route::get('/logout-user}', [LoginController::class, 'logout'])->name('logout-user');

Route::middleware([AuthMiddleware::class, PreventBackHistoryMiddleware::class])->group(function () {
    Route::prefix('admin')->group(function() {
        Route::get('/', function () {return view('admin.dashboard');})->name('dashboard');

        Route::get('/users/index', [UserController::class, 'index'])->name('admin.users.index'); // Listar usuarios
        Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create'); // Mostrar formulario para crear usuario
        Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store'); // Guardar usuario en la base de datos
        Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit'); // Mostrar formulario para editar usuario
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update'); // Actualizar usuario en la base de datos
        Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('admin.users.delete'); // Eliminar usuario
        Route::post('/users/index', [UserController::class, 'search'])->name('admin.users.index'); // Buscar en el listado de usuarios
    });
});

// Temp
Route::get('/admin/test', function () {return view('admin.test');})->name('admin.test');