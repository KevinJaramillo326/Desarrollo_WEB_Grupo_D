<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('COD_usuario'); // SERIAL PRIMARY KEY
            $table->string('Nombre_ingreso_usuario', 50)->unique();
            $table->string('contraseña_usuario', 100);
            $table->string('correo_electronico', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
