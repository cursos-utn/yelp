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

Route::get('/listar', 'ApiTipoController@listar');


Route::post('agregar', function(Request $request) {
    return Tipo::create($request->all);
});

Route::put('update/{id}', function(Request $request, $id) {
    $tipoPut = Tipo::findOrFail($id);
    $tipoPut->update($request->all());

    return $tipoPut;
});
Route::get('/tipos', 'ApiTipoController@listar');

Route::get('/tipos/{id}', 'ApiTipoController@traerPorId');

