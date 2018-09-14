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

//Route::get('/', 'IndexController@index');
Route::get('/', 'LugarController@listarLugar');

Auth::routes();


Route::get('/prueba',function(Request $request){

        $url = "api.openweathermap.org/data/2.5/weather?appid=442712c5b3e3f16ae33cea34ee272f91&zip=1826,AR&units=metric";
        $response = \Httpful\Request::get($url)
        ->expectsJson()
        ->send();
        echo "Status code: ".$response->code;
        echo "<br>";
        echo "Temperatura: ".$response->body->main->temp;
        
});


Route::post('/search',function(Request $request){
    //dd($request);
    $q = $request->input ( 'busqueda' );
    
    $requestBusqueda = Lugar::where('nombre','LIKE','%'.$q.'%')->get();
    
    $array = ['lugares'=>$requestBusqueda, 'query'=>$q];
    $mensajeError= ['mensaje'=>"No hay resultados"];
    
    if(count($requestBusqueda) > 0)
        return view('resultado', $array );
    else 
        return view ('resultado', $mensajeError);

 });

Route::get('/tipo/{id}', function($id) {
	$tipo = \App\Tipo::find($id);
	return view("tipo_listado", ["tipo" => $tipo]);
	
});

Route::get('/fragmentos/lugares.html', 'LugarController@listarFragmento');

Route::get('/html', function() {
    return view('principal');
});

///////////// Lugar

Route::get('/lugares', 'LugarController@listarLugar');

Route::get('/lugares/crear', 'LugarController@traerLugares')->middleware('auth');

Route::post('/lugares/crear', 'LugarController@crear')->middleware('auth');

Route::get('/lugar/download/images/{hash}', 'LugarController@download');

Route::get('/lugares/{id}', 'LugarController@ver');

Route::get('/lugares/editar/{id}', 'LugarController@editar');

Route::post('/lugares/editar/{id}', 'LugarController@actualizar');

Route::get('/lugares/borrar/{id}', 'LugarController@borrar');








?>