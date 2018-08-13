<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Lugar;
use Illuminate\Http\Request ; 
use Illuminate\Support\Facades\Input;

Route::get('/', 'IndexController@index');
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::post('/search',function(){
    //dd($request);
    $q = Input::get ( 'busqueda' );
    
    $requestBusqueda = Lugar::where('nombre','LIKE','%'.$q.'%')->get();
    
    $array = ['lugares'=>$requestBusqueda, 'query'=>$q];
    $mensajeError= ['mensaje'=>"No hay resultados"];
    
    if(count($requestBusqueda) > 0)
        return view('resultado', $array );
    else 
        return view ('resultado', $mensajeError);

 });



Route::get('/lugares', 'LugarController@listarLugar');

?>