<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class LugarController extends Controller {

    public function home() {


        
        $home = \App\Lugar::
        orderBy('nombre', 'asc')
        ->get();
        
        return view('principal', ['vista' => $home]);
    }
   

   public function listarLugar() {
    	
    	$list = \App\Lugar::
    	orderBy('reputacion', 'desc')
    	//->take(5)
    	->get();
    	
    	return view('lugar_listado', ['list' => $list]);
    }

    public function listarFragmento(Request $request) {
    	// ?p=<numero de pagina>
        $q = $request->query('q', "");
    	$p = $request->query('p',1);
    	if ($p<1) {
    		$p = 1;
    	}
    	$skip = ($p-1)*5;
    	//echo \App\Lugar::all()->count();
    	$list = \App\Lugar::where("nombre", "like", "%$q%")
    	->orderBy('reputacion', 'desc')
		->skip($skip)
    	->take(5)
    	->get();
    	
    	return view('lugar_fragmento', ['list' => $list]);
    }

    public function crear() {
        
        $listado = \App\Tipo::all();

        return view('crear_lugar', ["tipos" => $listado]);
    }

    public function agregar(Request $request) {
                        
        $lugar = new \App\Lugar();
        $lugar->nombre= $request->input("nombre");
        $lugar->direccion= $request->input("direccion");
        $lugar->barrio= $request->input("barrio");
        $lugar->horarios= $request->input("horarios");
        $lugar->telefonos= $request->input("telefonos");
        $lugar->escala_costo= $request->input("escala_costo");
        $lugar->reputacion= $request->input("reputacion");
        $lugar->tipo_id= $request->input("tipo_id");
        $lugar->foto= "";
        $lugar->creador_id= 1;
        $lugar->save();
               
        return redirect('/lugares');
    }

    public function editar(Request $request, $id) {
                              
        $ver = \App\Lugar::find($id);
                
        return view('editar', ['lugar' => $ver]);
    }

    public function actualizar(Request $request, $id) {
        
        
        $actualizar = \App\Lugar::find($id);

        $actualizar->nombre= $request->input("nombre");
        $actualizar->direccion= $request->input("direccion");
        $actualizar->barrio= $request->input("barrio");
        $actualizar->horarios= $request->input("horarios");
        $actualizar->telefonos= $request->input("telefonos");
        $actualizar->escala_costo= $request->input("escala_costo");
        $actualizar->reputacion= $request->input("reputacion");
        $actualizar->tipo_id= $request->input("tipo");
        $actualizar->foto= "";
        $actualizar->creador_id= 1;
        $actualizar->save();
      
        
        return redirect('/lugares');
    }

    public function borrar(Request $request, $id) {
          
        $borrar = \App\Lugar::find($id);
        $borrar->delete();
        
        return redirect('/lugares');
    }



}

?>