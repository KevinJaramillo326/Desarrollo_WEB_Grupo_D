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
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->id('COD_evaluacion'); // SERIAL PRIMARY KEY
            $table->text('descripcion_evaluacion');
            $table->integer('ponderacion_evaluacion');
            $table->unsignedBigInteger('COD_proyecto')->unique(); // UNIQUE FK

            $table->foreign('COD_proyecto')->references('COD_proyecto')->on('proyecto')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion');
    }
};
