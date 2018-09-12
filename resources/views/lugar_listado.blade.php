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



        <div class="container-fluid">
            
            <div class="row">
                <div class="col-6">
                    <h1>Lugares</h1>
                     @if(Auth::check())

                    <a href="/yelp/public/lugares/crear" class = "btn btn-primary">Añadir Lugar</a>
                    @endif
               
           
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
                        <th></th>
                        <th></th>
                        
                    </tr>
                </thead>
                @foreach ($list as $unaList)
                    <tr>
                        <td>{{$unaList->nombre}}</td>
                        <td>{{$unaList->direccion}}</td>
                        <td>{{$unaList->barrio}}</td>
                        <td>{{$unaList->horarios}}</td>
                        <td>{{$unaList->telefonos}}</td>
                        <td>{{$unaList->escala_costo}}</td>
                        <td>{{$unaList->reputacion}}</td>
                        @if(Auth::check())
                        <td><a href="/yelp/public/lugares/{{$unaList->id}}">Editar</a></td>
                        <td><a href="/yelp/public/lugares/borrar/{{$unaList->id}}">Borrar</a></td>
                        @endif
                        
                        
                    </tr>
                @endforeach
            </table>
            </div>
            </div>

        </div>

