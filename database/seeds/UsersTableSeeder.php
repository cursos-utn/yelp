<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('admin'),
            'cantidad_calificaciones' => 0,
            'reputacion' => 0,
            'admin' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'test',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('test'),
            'cantidad_calificaciones' => 0,
            'reputacion' => 0,
            'admin' => 0
        ]);
    }
}
