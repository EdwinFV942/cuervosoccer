<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id('idJugador');
            $table->string('nombre');
            $table->string('apellidoM');
            $table->string('apellidoP');
            $table->string('password');
            $table->string('usuario')->unique();
            $table->string('Posicion')->nullable();
            $table->string('img')->nullable();
            $table->unsignedBigInteger('idTUsuario');
            $table->foreign('idTUsuario')->references('idTUsuario')->on('tipo_usuarios');
            $table->unsignedBigInteger('idEquipo')->nullable();
            $table->foreign('idEquipo')->references('idEquipo')->on('equipos');
            // Asegúrate de que existe una tabla tipo_usuarios con una columna idTipoUsuario

            $table->timestamps(); // Puedes ajustar esto según tus necesidades
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
