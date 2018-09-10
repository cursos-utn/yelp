<?php
namespace App\Http\Controllers;

use App\Lugar;
use App\Tipo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;


class ApiLugarController extends Controller{

    public function listar(Request $request){

        $p = $request->query('p',1);
        // ?p=<numero de pagina>
        $skip = $request->query('start',0);
        $take = $request->query('length',10);
        if ($p<1) {
            $p = 1;
        }
        $skip = ($p-1)*5;

        //echo \App\Lugar::all()->count();
        $list = \App\Lugar::
        where('nombre', 'like', '%'.$request->query('q', '').'%')
        ->skip($skip)
        ->take(5)
        ->get();
        $cantidad = ceil(\App\Lugar::
        where('nombre', 'like', '%'.$request->query('q', '').'%')->count() / 5);
        return ['data' => $list, 'paginas' => $cantidad];

    }

    public function listarAll(){
        return \App\Lugar::all();
    }

    public function buscarId($id){
        try{
            return \App\Lugar::findOrFail($id);
        } catch(\Exception $e) {
            return Response("No encontrado", 404);
        }
    }

    public function update(Request $request, $id){
        try{
            $upd = \App\Lugar::findOrFail($id);
            //Cree el $filleable en Lugar.php para que pueda andar correctamente
            $upd->fill($request->all());
            $upd->save();
        } catch(\Exception $e) {
            //var_dump($e);
            return Response($e, 404);
        }
    }

    public function delete($id){
        try{
            $dele = \App\Lugar::findOrFail($id);
            $dele->delete();
        } catch(\Exception $e) {
            return Response("No encontrado", 404);
        }
    }

    public function agregar(Request $request){
        try{
            $validation = \Validator::make($request->all(),[ 
                'nombre' => 'required',
                'tipo_id' => 'required',
                'direccion' => 'required',
                'barrio' => 'required',
                'horarios' => 'required',
                'telefonos' => 'required',
            ]);
            if($validation->fails()){
                return Response("Error", 404);
            }
            else{
                return \App\Lugar::create($request->all());
            }
        } catch(\Exception $e) {
            return Response("Error", 404);
        }
    }

 /*
        ->take($take)
        ->get();
        $total = \App\Lugar::count();
        $respuesta = ["data" => $list, "recordsTotal" => $total, "recordsFiltered" => $total];
        return $respuesta;
    }
    */

}
