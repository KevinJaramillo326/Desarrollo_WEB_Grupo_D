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
        Schema::create('tipo_proyecto', function (Blueprint $table) {
            $table->id('COD_tipo_proyecto'); // equivale a SERIAL PRIMARY KEY
            $table->string('tipo_proyecto', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tipo_proyecto');
    }
};
