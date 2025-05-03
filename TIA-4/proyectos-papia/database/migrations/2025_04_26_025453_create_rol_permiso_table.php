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
        Schema::create('rol_permiso', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_rol');
            $table->unsignedBigInteger('COD_permiso');

            $table->primary(['COD_rol', 'COD_permiso']);

            $table->foreign('COD_rol')->references('COD_rol')->on('rol')->onDelete('cascade');
            $table->foreign('COD_permiso')->references('COD_permiso')->on('permiso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_permiso');
    }
};
