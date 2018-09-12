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
Route::get('/', 'LugarController@home');

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
Route::get('/logout', 'Auth\LoginController@logout'); 


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

Route::get('/lugares', 'LugarController@listarLugar');

Route::get('/lugares/crear', 'LugarController@crear');

Route::post('/lugares', 'LugarController@agregar');

Route::get('/lugares/{id}', 'LugarController@editar');

Route::post('/lugares/{id}', 'LugarController@actualizar');

Route::get('/lugares/borrar/{id}', 'LugarController@borrar');


Route::get('/fragmentos/lugares.html', 'LugarController@listarFragmento');

Route::get('/html', function() {
    return view('principal');
});

Route::get('/datatables', function() {
    return view('datatables');
});

?>