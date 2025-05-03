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
        Schema::create('ira', function (Blueprint $table) {
            $table->id('COD_IRA'); // SERIAL PRIMARY KEY
            $table->text('descripcion_IRA');
            $table->string('nivel_dominio_IRA', 50);
            $table->unsignedBigInteger('COD_ERA'); // FK

            $table->foreign('COD_ERA')->references('COD_ERA')->on('era')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ira');
    }
};
