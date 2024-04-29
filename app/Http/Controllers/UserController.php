<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Hash;

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

    public function store(Request $request) {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $password = $request->input('password');

        $userModel = new User();
        $userModel->name = $name;
        $userModel->surname = $surname;
        $userModel->email = $email;
        $userModel->password = Hash::make($password);
        $userModel->save();
        
        return Response()->json([
            'success' => true, 
            'message' => 'Usuario registrado con éxito'
        ]);

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

    public function update() {
        // actualizar datos usuario
        // ...
    }
}
