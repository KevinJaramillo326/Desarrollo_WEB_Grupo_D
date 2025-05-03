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
        Schema::create('programa_asignatura', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_asignatura');
            $table->unsignedBigInteger('COD_programa');

            $table->primary(['COD_asignatura', 'COD_programa']);

            $table->foreign('COD_asignatura')->references('COD_asignatura')->on('asignatura')->onDelete('cascade');
            $table->foreign('COD_programa')->references('COD_programa')->on('programa_academico')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programa_asignatura');
    }
};
