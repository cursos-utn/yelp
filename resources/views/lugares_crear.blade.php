@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ @session()->get('message') }}
        </div>
    @endif
    <h1>Crear un nuevo lugar</h1>
    <form method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="input-class d-flex">

            <div class="row">
                <div class="col-lg-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del lugar">
                    <br>
                    <label for="barrio">Barrio</label>
                    <input type="text" name="barrio" class="form-control" id="barrio" placeholder="Barrio Bonito">
                    <br>
                    <label for="telefonos">Teléfono</label>
                    <input type="text" name="telefonos" class="form-control" id="telefonos" placeholder="154564567">
                    <br>
                    <label for="image">Imagen</label>
                    <input type="file" name="image" class="form-control-file" id="image"> 
                    
                </div>
                <div class="col-lg-6">
                    <label for="tipo">Tipo de lugar</label>
                    <select class="form-control" name="tipo" id="tipo">
                        <option value="1">Restaurant</option>
                        <option value="2">Bar</option>
                        <option value="3">Cantina</option>
                    </select>
                    <br>
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Avenida de la vida 123">
                    <br>
                    <label for="horarios">Horarios</label>
                    <input type="text" name="horarios" class="form-control" id="horarios" placeholder="De 10 a 23">
                    <br>
                    <button type="submit" class="btn btn-primary pull-right">Subir
                    </button>
  
                </div>
            </div>

        </div>    
    </form>
</div>
@endsection