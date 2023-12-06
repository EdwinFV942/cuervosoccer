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
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->id('idTUsuario');
            $table->string('nombre');
            $table->timestamps(); // Puedes ajustar esto según tus necesidades
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_usuarios');
    }
};
