<?php
namespace App\Http\Controllers;

use App\Tipo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ApiTipoController extends Controller{

    public function listar(){
        return \App\Tipo::all();
    }

 public function agregar(Request $request)
    {
        return Tipo::create($request->all());
    }



    public function update(Request $request, $id)
    {
        try {
            $tipoPut = Tipo::findOrFail($id);
            $this->validate($request, [
       'nombre' => 'required',
   		]);
            $tipoPut->update($request->all());

       
            return $tipoPut;
        } catch(\Exception $e) {
            return Response("No encontrado", 404);
        }
    }

    public function traerPorId($id)
    {   
        /* Opcion 1 */
        try{
            return \App\Tipo::findOrFail($id);
        } catch(\Exception $e) {
            return Response("No encontrado", 404);
        }
        /* Opcion 2 */
        /*
        $tipo = \App\Tipo::find($id);
        if (!$tipo)
            return Response("No encontrado", 404);
        return $tipo;
        */

    }

    public function borrar($id){
        
        $borrado = \App\Tipo::find($id);

        $borrado->delete();

    }
}