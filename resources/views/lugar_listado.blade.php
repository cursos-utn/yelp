@extends('layouts.app')


@section('content')

@include('partials.search')

    <div class="container">
        <div class="row">
            <h1>Lugares</h1>
        </div>
        <div class="row">       
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
                        <th>Imagen</th>
                        
                    </tr>
                </thead>
                @foreach ($list as $unaList)
                    <tr>
                        <td><a href="lugares/{{ $unaList->id }}">{{$unaList->nombre}}</a></td>
                        <td>{{$unaList->direccion}}</td>
                        <td>{{$unaList->barrio}}</td>
                        <td>{{$unaList->horarios}}</td>
                        <td>{{$unaList->telefonos}}</td>
                        <td>{{$unaList->escala_costos}}</td>
                        <td>{{$unaList->reputacion}}</td>
                        <td>{{$unaList->tipo->nombre}}</td>
                        <td> <img src="{{ asset('/lugar/download/'.$unaList->foto)}}" class="img img-thumbnail" style="max-width: 120px"></td>
                        
                    </tr>
                @endforeach
            </table>
        </div>          
    </div>

@endsection 

