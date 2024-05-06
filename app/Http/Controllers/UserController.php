<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    
    public function index() {
        if(!Session::has('administrator')) {
            return redirect()->route('home');
        }

        $users = User::select('id', 'name', 'surname', 'email', 'created_at')->orderBy('id', 'desc')->paginate(20);
        $scripts = ['users.js'];
        return view('admin.users.index', compact('users', 'scripts'));
    }

    public function create() {
        $scripts = ['users.js'];
        return view('admin.users.create', compact('scripts'));
    }

    public function store(Request $request) {
        
        $messages = [
            'name.required' => 'Debes ingresar tu nombre',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre debe tener un máximo de 20 caracteres',
            'surname.required' => 'Debes ingresar tu apellido',
            'surname.min' => 'El apellido debe tener al menos 3 caracteres',
            'surname.max' => 'El apellido debe tener un máximo de 20 caracteres',
            'email.required' => 'Debes ingresar tu email',
            'email.max' => 'El email debe tener un máximo de 60 caracteres',
            'email.email' => 'El email es inválido',
            'email.unique' => 'Ya existe un usuario registrado con ese email',
            'password.required' => 'Debes ingresar tu password',
            'password.min' => 'El password debe contener al menos 5 caracteres',
        ];
        
        $validations = $request->validate([
           'name' => 'required|min:3|max:20',
           'surname' => 'required|min:3|max:20',
           'email' => 'required|max:60|email|unique:users',
           'password' => 'required|min:5',

        ], $messages);

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
        $userData = User::select('id', 'name', 'surname', 'email')->where('id', $id)->first();
        if (!$userData) {
            return redirect()->route('admin.users.index');
        }
        $scripts = ['users.js'];
        return view('admin.users.edit', compact('userData', 'scripts')); 
    }

    public function update($id, Request $request) {
        $messages = [
            'name.required' => 'Debes ingresar tu nombre',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre debe tener un máximo de 20 caracteres',
            'surname.required' => 'Debes ingresar tu apellido',
            'surname.min' => 'El apellido debe tener al menos 3 caracteres',
            'surname.max' => 'El apellido debe tener un máximo de 20 caracteres',
            'email.required' => 'Debes ingresar tu email',
            'email.max' => 'El email debe tener un máximo de 60 caracteres',
            'email.email' => 'El email es inválido',
            'email.unique' => 'Ya existe un usuario registrado con ese email',
            'password.min' => 'El password debe contener al menos 5 caracteres',
        ];
        
        $validations = $request->validate([
           'name' => 'required|min:3|max:20',
           'surname' => 'required|min:3|max:20',
           'email' => 'required|max:60|email|unique:users,email,'.$id.',id',
           'password' => 'nullable|min:5',

        ], $messages);

        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $password = $request->input('password');

        if ($password) {
            User::where('id', $id)->update([
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
                'password' => Hash::make($password)
            ]);
        } else {
            User::where('id', $id)->update([
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
            ]);
        }

        return Response()->json([
            'success' => true, 
            'message' => 'Usuario editado con éxito'
        ]);
    }

    public function delete($id) {
        $userData = User::where('id', $id)->first();
        
        if(!$userData) {
            return Response()->json([
                'success' => false,
                'message' => 'No existe usuario registrado con dicho ID'
            ]);
        }

        User::where('id', $id)->delete();
        return Response()->json([
            'success' => true,
            'message' => 'Usuario eliminado con éxito'
        ]);
    }
}
