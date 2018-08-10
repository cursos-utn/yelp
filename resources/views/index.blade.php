@extends('layouts.app')

<h1>

<div class="container">
    <form action="{{URL::to('/search')}}" method="POST" role="search">
        {{csrf_field()}}
        <div class="input-class">
            <input type="text" class="form-control" name="busqueda" placeholder="Inserte su busqueda aqui">
            <button type="submit" class="btn btn-primary">Buscar
            </button>
        </div>    
    </form>
</div>
</h1>