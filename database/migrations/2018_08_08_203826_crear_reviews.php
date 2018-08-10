<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
        
            $table->increments('id');
            $table->integer('lugar_id');
            $table->integer('users_id');
            $table->string('comentario');
            $table->integer('puntaje_lugar');       
            $table->integer('puntaje_positivo'); 
            $table->integer('puntaje_negativo');  
        
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
    }
}
