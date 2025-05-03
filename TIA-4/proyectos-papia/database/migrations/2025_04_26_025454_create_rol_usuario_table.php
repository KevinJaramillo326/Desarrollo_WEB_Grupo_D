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
        Schema::create('rol_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_rol');
            $table->unsignedBigInteger('COD_usuario');

            $table->primary(['COD_rol', 'COD_usuario']);

            $table->foreign('COD_rol')->references('COD_rol')->on('rol')->onDelete('cascade');
            $table->foreign('COD_usuario')->references('COD_usuario')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_usuario');
    }
};
