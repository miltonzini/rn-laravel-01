<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('admin.login');
    }

    public function login()
    {
        // ...
    }

    public function logout()
    {
        // ...
    }
}
