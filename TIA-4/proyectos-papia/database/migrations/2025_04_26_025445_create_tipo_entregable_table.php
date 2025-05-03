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
        Schema::create('tipo_entregable', function (Blueprint $table) {
            $table->id('COD_tipoentregable'); // SERIAL PRIMARY KEY
            $table->string('nombre_tipo_entregable', 50);
            $table->text('descripcion_tipo_entregable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_entregable');
    }
};
