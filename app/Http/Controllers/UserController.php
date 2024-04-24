<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function list() {
        return view('admin.users.list');
    }
    public function create() {
        return view('admin.users.create');
    }

    public function store() {
        // guardar usuario en la base de datos (post)
        // ...
    }
}
