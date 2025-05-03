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
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id('COD_proyecto'); // SERIAL PRIMARY KEY
            $table->string('titulo_del_proyecto', 100);
            $table->text('objetivo_proyecto');
            $table->string('orientacion_del_proyecto', 100);
            $table->unsignedBigInteger('COD_tipo_proyecto');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');

            $table->foreign('COD_tipo_proyecto')->references('COD_tipo_proyecto')->on('tipo_proyecto')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};
