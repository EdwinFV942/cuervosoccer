<?php

namespace App\Http\Controllers\Admin;

use App\Models\jugador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\equipo;

class AdminController extends Controller
{
    public function index(){
        $jugadores = jugador::where('idTUsuario', 1)->get();
        $equipos = equipo::all();
        return view('Entrenadores.index',compact('jugadores','equipos'));
    }
}
