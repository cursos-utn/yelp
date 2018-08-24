<?php
namespace App\Http\Controllers;

use App\Tipo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ApiLugarController extends Controller{

    public function listar(Request $request){
        // ?p=<numero de pagina>
        $skip = $request->query('start',0);
        $take = $request->query('length',10);
        /*
        if ($p<1) {
            $p = 1;
        }
        $skip = ($p-1)*5;
        */
        //echo \App\Lugar::all()->count();
        $list = \App\Lugar::
        orderBy('reputacion', 'desc')
        ->skip($skip)
        ->take($take)
        ->get();
        $total = \App\Lugar::count();
        $respuesta = ["data" => $list, "recordsTotal" => $total, "recordsFiltered" => $total];
        return $respuesta;
    }

}
