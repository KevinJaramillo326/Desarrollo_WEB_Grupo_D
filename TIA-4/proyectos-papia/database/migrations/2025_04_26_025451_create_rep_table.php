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
        Schema::create('rep', function (Blueprint $table) {
            $table->id('COD_REP'); // SERIAL PRIMARY KEY
            $table->text('Descripcion');
            $table->unsignedBigInteger('COD_proyecto'); // FK

            $table->foreign('COD_proyecto')->references('COD_proyecto')->on('proyecto')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rep');
    }
};
