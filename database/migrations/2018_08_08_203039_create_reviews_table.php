<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reviews', function (Blueprint $table){
            $table->increments('id');
            $table->integer('lugar_id');
            $table->integer('users_id');
            $table->string('comentario');
            $table->integer('puntajeLugar');
            $table->integer('puntajesPositivos');
            $table->integer('puntajesNegativos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('reviews');
    }
}
