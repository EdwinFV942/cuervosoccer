<?php

namespace App\Http\Controllers\Jugador;

use App\Http\Controllers\Controller;
use App\Models\jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        $usuario = session()->get('Usuario');
        $jugador = jugador::where('usuario', $usuario)->first();
        return view('jugadores.index', compact('jugador'));
    }

    public function editImagen(Request $request)
    {
        $usuario = session()->get('Usuario');
        $jugador = jugador::where('usuario', $usuario)->first();
        $imagen = $request->foto;
        $nombreImagen = $imagen->getClientOriginalName();
        if (isset($imagen) && $imagen != "") {
            //Obetener la extension y donde se ubica el archivo
            $hrs = date('H-m-s');
            //Imagen
            $tipo =  $imagen->getClientOriginalExtension();
            $temp = $imagen->getRealPath();
            if ($tipo === "gif" || $tipo === "jpeg" || $tipo === "webp" || $tipo === "jpg" || $tipo === "png") {
                $imagen->move(public_path() . '/uploads/temp_user', $nombreImagen);
                try {
                    $jugador->img = $nombreImagen;
                    $jugador->save();
                    $response['status'] = 'Aprovado';
                    $response['message'] = 'Se a modificado correctamente el perfil correctamente';
                    $response['icon'] = 'success';
                    return view('jugadores.index', compact('jugador'));
                } catch (\Throwable $th) {
                    $response['status'] = 'Error';
                    $response['message'] = 'Al parecer no se a podido modificar el perfil, pongase en contacto con soporte';
                    $response['icon'] = 'error';
                    return view('jugadores.index', compact('jugador'));
                }
            }
        } else {
            $response['status'] = 'Error';
            $response['message'] = 'Al parecer no se a podido modificar el perfil, pongase en contacto con soporte';
            $response['icon'] = 'error';
            return view('jugadores.index', compact('jugador'));
        }
    }
}
