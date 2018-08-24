<?php
namespace App\Http\Controllers;

use App\Lugar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ApiLugarController extends Controller{

    public function listar(Request $request){

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
        return $list;

    }

 
}
