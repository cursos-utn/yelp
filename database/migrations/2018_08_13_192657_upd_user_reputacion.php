<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdUserReputacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('cantidad_calificaciones')->default(0)->change();
            $table->decimal('reputacion', 5, 2)->default(0)->change();
            $table->boolean('admin')->default(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('cantidad_calificaciones');
            $table->decimal('reputacion', 5, 2);
            $table->boolean('admin');
        });
    }
}
