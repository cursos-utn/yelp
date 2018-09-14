<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class LugarController extends Controller {
   

   public function listarLugar() {
    	
    	$list = \App\Lugar::
    	orderBy('reputacion', 'desc')
    	->take(5)
    	->get();
    	
    	return view('lugar_listado', ['list' => $list]);
    }

    public function listarFragmento(Request $request) {
    	// ?p=<numero de pagina>
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
    	
    	return view('lugar_fragmento', ['list' => $list]);
	}
	
	public function crear(Request $request)
    {
		$nuevoLugar = $request->all();
		$path = $request->file('image')->store('images');

        // Le aclaro acá cuál es el campo del FORM con nombre diferente.
        $nuevoLugar['tipo_id'] = $nuevoLugar['tipo'];
        $nuevoLugar['foto'] = $path;
        $nuevoLugar['creador_id'] = $request->user()->id;

		\App\Lugar::create($nuevoLugar);
		
		return redirect()->back()->with('message', 'Lugar creado correctamente!');

	}

	public function traerLugares()
	{
		$listadoTipos = \App\Tipo::all();
		return view('lugares_crear', ['listadoTipos' => $listadoTipos]);
	}
	
	public function download($hash) 
	{
        return response()->download(storage_path('app/images/'.$hash));
	}
	
	public function ver($id)
	{
		$lugar = \App\Lugar::find($id);

		$creador = \App\User::where('id', $lugar->creador_id)->first();
		
		return view('lugar', ['lugar' => $lugar, 'creador' => $creador]);

	}

	public function borrar($id)
	{
		$borrado = \App\Lugar::find($id);

		$borrado->delete();

		return redirect()->back()->with('message', 'Lugar borrado correctamente!');

	}

	public function editar ($id)
	{
		$listadoTipos = \App\Tipo::all();
		$editable = \App\Lugar::find($id);

		return view('lugares_editar', ['editable' => $editable, 'listadoTipos' => $listadoTipos]);

	}

	public function actualizar(Request $request)
    {
		$lugarEditado = $request->all();

        // Le aclaro acá cuál es el campo del FORM con nombre diferente.
        $lugarEditado['tipo_id'] = $lugarEditado['tipo'];
        $lugarEditado['creador_id'] = $request->user()->id;

		\App\Lugar::update($lugarEditado);
		
		return redirect()->back()->with('message', 'Lugar editado correctamente!');

	}

}

?>