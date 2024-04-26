<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    
    public function index() {
        $users = User::all(); 
        $scripts = ['users'];
        return view('admin.users.index', compact('users', 'scripts'));
    }
    public function create() {
        $scripts = ['users.js'];
        return view('admin.users.create', compact('scripts'));
    }

    public function store() {
        // guardar usuario en la base de datos (post)
        // ...
    }

    public function edit($id) {
        // mostrar formulario para editar usuario
        $userData = User::select('id', 'name', 'surname', 'email')->where('id', $id)->first();
        if (!$userData) {
            return redirect()->route('admin.users.index');
        }
        $scripts = ['users.js'];
        return view('admin.users.edit', compact('userData', 'scripts')); 
    }
}
