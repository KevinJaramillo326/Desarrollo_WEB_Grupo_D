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
        Schema::create('era', function (Blueprint $table) {
            $table->id('COD_ERA'); // SERIAL PRIMARY KEY
            $table->integer('numero_ERA');
            $table->text('descripcion_ERA');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('era');
    }
};
