<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request) {

        $validated = Validator::make($request->all(),[
            'name'       => 'required|string|max:100',
            'email'      => 'required|email|max:255|unique:users,email,'.Auth::id(),
            'password'   => 'required|min:8|same:repassword',
        ]);

        if($validated->fails()) return redirect()->route("register")->withErrors($validated->errors())->withInput();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route("login")->withSuccess("Se ha registrado con éxito. Inicie sesión para continuar.");
    }

    public function login(Request $request) {
        
        if(Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password
            ])){
                $request->session()->regenerate();
                return redirect()->route("dashboard");

        }else{

            return redirect()->route('login')->withFail("Las credenciales, no son correctas");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login")->withSuccess("Se ha cerrado la sesion correctamente.");
    }
}
