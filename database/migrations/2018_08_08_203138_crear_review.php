<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('users_id');
            $table->integer('lugar_id');
            $table->text('comentario');
            $table->integer('puntaje_lugar');
            $table->integer('puntajes_positivos');
            $table->integer('puntajes_negativos');
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
        Schema::dropIfExists('review');

    }
}
