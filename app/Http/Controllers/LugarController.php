<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class LugarController extends Controller {
   

   public function listarLugar() {
    	
    	$list = \App\Lugar::
    	orderBy('reputacion', 'desc')
    	->take(5)
    	->get();
    	
    	return view('lugar_listado', ['list' => $list]);
    }

    public function listarFragmento(Request $request) {
    	// ?p=<numero de pagina>
    	$p = $request->query('p',1);
    	if ($p<1) {
    		$p = 1;
    	}
    	$skip = ($p-1)*5;
    	//echo \App\Lugar::all()->count();
    	$list = \App\Lugar::
    	orderBy('reputacion', 'desc')
		->skip($skip)
    	->take(5)
    	->get();
    	
    	return view('lugar_fragmento', ['list' => $list]);
	}
	
	public function agregar(Request $request){
		/* Para que solo agreguen admins
		if ($request->user()->admin!=TRUE) {
			return view('index');
		}
		*/

		$post = new \App\Lugar();
		$post->nombre = $request->nombre;
		$post->direccion = $request->direccion;
		$post->barrio = $request->barrio;
		$post->horarios = $request->horarios;
		$post->telefonos = $request->telefonos;
		$post->foto = $request->foto;
		$post->tipo_id = $request->tipo_id;
		$post->creador_id = $request->user()->id;
		$post->save();
	}

}

?>