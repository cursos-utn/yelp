<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class LugarController extends Controller {
   

   public function listarLugar() {
    	$list = \App\Lugar::all();
    	return view('lugar_listado', ['list' => $list]);
    }

}

?>