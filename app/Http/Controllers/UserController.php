<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    
    public function index() {
        $users = User::all(); 
        return view('admin.users.index', ['users' => $users]);
    }
    public function create() {
        return view('admin.users.create');
    }

    public function store() {
        // guardar usuario en la base de datos (post)
        // ...
    }
}
