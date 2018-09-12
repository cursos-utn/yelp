@extends('layouts.app')


@section('content')
@include('partials.search')

<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <h1>{{ $lugar->nombre }}</h2>
            <p>Fecha de alta: {{ $lugar->created_at}} | Por: {{ $creador->name}} </p>
            <hr>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-lg-4">
            <h2>Dirección</h2>
            <p>{{ $lugar->direccion }}</p>
        </div>
        <div class="col-lg-4">
            <h2>Barrio</h2>
            <p>{{ $lugar->barrio }}</p>
        </div>
        <div class="col-lg-4">
            <h2>Horarios</h2>
            <p>{{ $lugar->horarios }}</p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-lg-4">
            <h2>Teléfono</h2>
            
            @if($lugar->telefono)
                <p>{{ $lugar->telefono }}</p>
            @else
                <p>-</p>
            @endif
            
        </div>
        <div class="col-lg-4">
            <h2>Escala de costo</h2>
            
            @if($lugar->escala_costo)
                <p>{{ $lugar->escala_costo }}</p>
            @else
                <p>-</p>
            @endif

        </div>
        <div class="col-lg-4">
            <h2>Reputación</h2>

            @if($lugar->reputacion)
                <p>{{ $lugar->reputacion }}</p>
            @else
                <p>-</p>
            @endif

        </div>
    </div>




</div>






@endsection