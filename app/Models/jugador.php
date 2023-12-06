<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    use HasFactory;
    protected $primaryKey = 'idJugador';
    protected $table = 'jugadores';
    protected $fillable = [
        'nombre',
        'apellidoM',
        'apellidoP',
        'password',
        'usuario',
        'Posicion',
        'img',
        'idTUsuario',
        'idEquipo',
        'equipo',
    ];

    // Relación con TipoUsuario
    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'idTUsuario');
    }

    // Relación con Equipo
    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'idEquipo');
    }
}
