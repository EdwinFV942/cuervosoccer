<?php

namespace App\Http\Controllers\Admin;

use App\Models\jugador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\equipo;

class AdminController extends Controller
{
    public function index()
    {
        $jugadores = jugador::where('idTUsuario', 1)->get();
        $equipos = equipo::all();
        return view('Entrenadores.index', compact('jugadores', 'equipos'));
    }

    public function jugadoresView()
    {
        $jugadores = jugador::where('idTUsuario', 1)->get();
        return view('Entrenadores.jugadores', compact('jugadores'));
    }

    public function jugadoresEditView()
    {
    }

    public function jugadoresEditSave()
    {
    }

    public function jugadoresCreate()
    {
        $equipos = equipo::all();
        return view('Entrenadores.Jugadores.create', compact('equipos'));
    }

    public function jugadoresCreateSave(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidoM' => 'required|string|max:255',
            'apellidoP' => 'required|string|max:255',
            'username' => 'required|string|unique:jugadores,usuario|max:255',
            'password' => 'required|string|min:8',
            'posicion' => 'required|string|max:255',
            'equipo' => 'required|exists:equipos,idEquipo',
        ]);
        jugador::create([
            'nombre' => $request->nombre,
            'apellidoM' => $request->apellidoM,
            'apellidoP' => $request->apellidoP,
            'password' => bcrypt($request->password),
            'usuario' => $request->username,
            'Posicion' => $request->posicion,
            'img' => "img.png",
            'idTUsuario' => 1,
            'idEquipo' => $request->equipo
        ]);
        $jugadores = jugador::where('idTUsuario', 1)->get();
        return view('Entrenadores.jugadores', compact('jugadores'));
    }

    public function jugadoresDelete()
    {
    }

    public function EquiposView()
    {
    }

    public function EquiposEditView()
    {
    }


    public function EquiposEditSave()
    {
    }

    public function  EquiposCreate()
    {
    }

    public function  EquiposCreateSave()
    {
    }

    public function EquiposDelete()
    {
    }
}
