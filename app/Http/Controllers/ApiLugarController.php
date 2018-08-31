<?php
namespace App\Http\Controllers;

use App\Lugar;
use App\Tipo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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

 /*
        ->take($take)
        ->get();
        $total = \App\Lugar::count();
        $respuesta = ["data" => $list, "recordsTotal" => $total, "recordsFiltered" => $total];
        return $respuesta;
    }
    */

}
