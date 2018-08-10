<?php

use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo')->insert([
            'nombre' => 'Restaurant'
        ]);
        DB::table('tipo')->insert([
            'nombre' => 'Bar'
        ]);
        DB::table('tipo')->insert([
            'nombre' => 'Cantina'
        ]);
    }
}
