@extends('layouts.app')

@section('content')
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
@section('content')