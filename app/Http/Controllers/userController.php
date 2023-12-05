<?php

namespace App\Http\Controllers;

use App\Http\Requests\userValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //
    public function login()
    {
        return view('users/login');
    }
    public function dashboard()
    {
        return view('users/dashboard');
    }
    public function usuariosWiew()
    {
        return view('users/user');
    }
    public function sesion(request $data)
    {
        $data->validate([
            "email" => "required",
            "password" => "required"
        ]);


        $credencials = [
            "email" => $data->email,
            "password" => $data->password
        ];

        if (Auth::attempt($credencials)) {
            $data->session()->regenerate();

            return redirect()->to("/dashboard");
        } else {
            return  [
                "message" => "Crendenciales invalidas",
                "data" => $credencials
            ];
        }
    }
    public function logout()
    {
        Auth::logout();
        if (!Auth::check()) {
            return redirect()->to("/");
        } else {
            return response()->json(["mensaje" => "No se pudo cerrar la sesión", "status" => false], 400);
        }
    }
    public function usuariosListar()
    {
        $users = User::get();

        return response()->json(["status" => true, "data" => $users], 200);
    }
    public function registrar(userValidation $data)
    {

        $data["password"] = $data->identificacion;
        $user = User::create($data->all());
        if ($user) {
            return response()->json(["mensaje" =>  "Usuario creado exitosamente", "status" => true], 200);
        } else {
            return response()->json(["mensaje" =>  "Error al registrar el usuario", "status" => false], 200);
        }

        
    }
}
