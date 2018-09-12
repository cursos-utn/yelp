@extends('layouts.app')




@section('content')


        <div class="container">
            <h1>Lugar</h1>
            <form method='post' enctype="multipart/form-data">
            	{{csrf_field()}}
            	<input type="text" name="nombre" placeholder="nombre" />

            	<select name="tipo_id">
            		<option>[Seleccione una opción]</option>
            		@foreach($tipos as $unTipo)
            		<option value="{{$unTipo->id}}">{{$unTipo->nombre}}</option>
            		@endforeach




            	</select>

            	<input type="submit" name="Crear">

            </form>
            
        </div>

@endsection