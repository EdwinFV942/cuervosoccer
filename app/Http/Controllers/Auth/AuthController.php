<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jugador;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $usuarios = jugador::where('usuario', $request->username)->first();
        $passwordVerify = password_verify($request->password, $usuarios->password);
        if ($passwordVerify) {
            session()->put('Usuario', $request->username);
            session()->put('TUsuario', $usuarios->idTUsuario);
            if ($usuarios->idTUsuario  == 1) {//Jugador
                return redirect()->route('HomeJugador')->with('success', 'Te has logeado exitosamente');
            }else if($usuarios->idTUsuario  == 2){//Entrenador
                return redirect()->to('/administrador/inicio')->with('success', 'Te has logeado exitosamente');
            }
        }else{
            return redirect()->route('home')->with('error', 'Revisa tus credenciales');
        }
    }

    public function salir(){
        session()->flush();

        // Cerrar la sesión
        session()->regenerate();

        return redirect()->route('home');
    }
}
