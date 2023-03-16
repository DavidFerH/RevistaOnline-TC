<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('articulos', function(Blueprint $table) {
            $table->increments('COD_ART');
            $table->string('TITULO');
            $table->string('CONTENIDO');
            $table->unsignedInteger('COD_REV');

            $table->foreign('COD_REV')->references('COD_REV')->on('revistas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }
};
