<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearLugar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_id');
            $table->string('direccion');
            $table->string('barrio');
            $table->string('horarios');
            $table->string('telefonos');
            $table->string('foto');
            $table->decimal('escala_costo', 5, 2);
            $table->decimal('reputacion', 5, 2);
            $table->integer('creador_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugar');

    }
}
