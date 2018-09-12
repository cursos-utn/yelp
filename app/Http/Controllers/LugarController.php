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
    	//->take(5)
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

    public function crear(Request $request) {

        $listado = \App\Tipo::all();
          
        return view('crear', ['tipo' =>$listado]);
    
    }

    public function agregar(Request $request){
         $this->validate($request, [
        'nombre' => 'required',
        'direccion' => 'required',
    ]);
         $lugar = new \App\Lugar();
         $lugar->nombre = $request->input("nombre");
         $lugar->direccion = $request->input("direccion");
         $lugar->save();
         return redirect('/lugares');
    }

    public function ver($id) {
         
        $lugar = \App\Lugar::find($id);

        return view('actualizar', ['lugar' =>$lugar]);
            
    }

    public function actualizar(Request $request,$id) {
         $this->validate($request, [
        'nombre' => 'required',
        'direccion' => 'required',
    ]);
         $lugar = \App\Lugar::find($id);
         $lugar->nombre = $request->input("nombre");
         $lugar->direccion = $request->input("direccion");
       
         $lugar->save();
         return view('ver', ['lugar' =>$lugar]);
    }

    public function borrar($id) {
         $lugar = \App\Lugar::find($id);
        $lugar->delete();
        return redirect('/lugares');
    }

}

?>