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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id('COD_estudiante'); // SERIAL PRIMARY KEY
            $table->string('nombre_1', 50);
            $table->string('nombre_2', 50)->nullable();
            $table->string('apellido_1', 50);
            $table->string('apellido_2', 50)->nullable();
            $table->string('telefono_1', 15);
            $table->string('telefono_2', 15)->nullable();
            $table->string('correo_electronico', 100);
            $table->unsignedBigInteger('COD_programa');
            $table->unsignedBigInteger('COD_usuario')->unique();

            $table->foreign('COD_programa')->references('COD_programa')->on('programa_academico')->onDelete('cascade');
            $table->foreign('COD_usuario')->references('COD_usuario')->on('usuario')->onDelete('cascade');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
