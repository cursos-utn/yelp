<?php


use Illuminate\Http\Request;
use App\Tipo;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');





Route::post('/tipos', 'ApiTipoController@agregar');

Route::put('/tipos/{id}', 'ApiTipoController@update');

Route::get('/tipos', 'ApiTipoController@listar');

Route::get('/tipos/{id}', 'ApiTipoController@traerPorId');

Route::delete('/tipos/{id}', 'ApiTipoController@borrar');


///////////// Lugar

Route::get('/lugares', 'ApiLugarController@listar');

Route::get('/lugares/crear', 'ApiLugarController@crear');

Route::post('/lugares', 'ApiLugarController@agregar');

Route::get('/lugares/{id}', 'ApiLugarController@ver');

Route::post('/lugares/{id}', 'ApiLugarController@actualizar');

Route::get('/lugares/borrar/{id}', 'ApiLugarController@borrar');

