@extends('layouts.app')



<div class="container">
    <form action="{{URL::to('/search')}}" method="POST" role="search">
        {{csrf_field()}}
        <div class="input-class d-flex">
            <input type="text" class="form-control" name="busqueda" placeholder="Inserte su busqueda aqui">
            <button type="submit" class="btn btn-primary ml-auto">Buscar
            </button>
        </div>    
    </form>
</div>



        <div class="container">
            <h1>Lugares</h1>
            
                </div>
           
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Barrio</th>
                        <th>Horarios</th>
                        <th>Telefonos</th>
                        <th>Escala de Costo</th>
                        <th>Reputacion</th>
                        <th>Tipo</th>
                        
                    </tr>
                </thead>
                @foreach ($list as $unaList)
                    <tr>
                        <td>{{$unaList->nombre}}</td>
                        <td>{{$unaList->direccion}}</td>
                        <td>{{$unaList->barrio}}</td>
                        <td>{{$unaList->horarios}}</td>
                        <td>{{$unaList->telefonos}}</td>
                        <td>{{$unaList->escala_costos}}</td>
                        <td>{{$unaList->reputacion}}</td>
                        
                    </tr>
                @endforeach
            </table>

        </div>

