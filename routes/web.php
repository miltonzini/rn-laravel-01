<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('login');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');