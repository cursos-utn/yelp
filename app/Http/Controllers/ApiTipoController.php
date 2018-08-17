<?php

use App\Tipo;
use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

class ApiTipoController extends Controller{

    public function listar(){
        return \App\Tipo::all();
    }

    public function traerPorId($id)
    {
        return \App\Tipo::find($id);
    }

    public function borrar($id){
        
        $borrado = \App\Tipo::find($id);

        $borrado->delete()
    }
}