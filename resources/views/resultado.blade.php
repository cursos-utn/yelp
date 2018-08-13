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
   @if(isset($lugares))

   <h2>Lugares encontrados</h2>
   <table class="table table-striped">
       <thead>
           <tr>
               <th>Nombre</th>
               <th>Direccion</th>
           </tr>
       </thead>
       <tbody>
           @foreach($lugares as $cadaLugar)
           <tr>
               <td>{{$cadaLugar->nombre}}</td>
               <td>{{$cadaLugar->direccion}}</td>
           </tr>
           @endforeach
       </tbody>
   </table>
   @else
    <p>{{ $mensaje }}</p>
   @endif
</div>