<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugar;

class ApiLugarController extends Controller
{
    public function listar(Request $request)
    {
        
        $p = $request->query('p',1);       
        if ($p<1) {
            $p = 1;
        }
        $skip = ($p-1)*5;

        $list = \App\Lugar::
        skip($skip)
        ->take(5)
        ->get();
        return response()->json($list);
    }

    public function crear(Request $request)
    {
        $nuevoLugar = $request->all();

        // Le aclaro acá cuál es el campo del FORM con nombre diferente.
        $nuevoLugar['tipo_id'] = $nuevoLugar['tipo'];
        $nuevoLugar['foto'] = $request->photo->path();
        $nuevoLugar['creador_id'] = $request->user()->id;

        \App\Lugar::create($nuevoLugar);

    }

}
