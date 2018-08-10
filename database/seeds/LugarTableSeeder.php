<?php

use Illuminate\Database\Seeder;

class LugarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
	        DB::table('lugar')->insert([
            	'nombre' => str_random(10),
            	'tipo_id' => rand(1,3),
            	'direccion' => str_random(50),
            	'barrio' => 'CABA',
            	'horarios' => '12-22',
            	'telefonos' => str_random(10),
            	'escala_costo' => rand(1,10),
            	'reputacion' => rand(1,10),
            	'creador_id' => 2,
            	'created_at' => date('Y-m-d'),
            	'updated_at' => date('Y-m-d'),
            	'foto' => ''
        	]);
    	}
    }
}
