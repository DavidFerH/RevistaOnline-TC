<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_articulos', function (Blueprint $table) {
            $table->string('DNI');
            $table->unsignedInteger('COD_ART');

            $table->primary(['DNI', 'COD_ART']);
            $table->date('FECHA_PUB');

            $table->foreign('DNI')->references('DNI')->on('autor')->onDelete('cascade');
            $table->foreign('COD_ART')->references('COD_ART')->on('articulos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor_articulos');
    }
};
