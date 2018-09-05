@extends('layouts.app')


@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar</title>
</head>
<body>
    <form action="/lugares" method="post">
        <table>
            {{ csrf_field() }}
            <tr>
                <td><input type="text", name="nombre", placeholder="Nombre"></td>
            </tr>
            <tr>
                <td><input type="text", name="direccion", placeholder="Direccion"></td>
            </tr>
            <tr>
                <td><input type="text", name="barrio", placeholder="Barrio"></td>
            </tr>
            <tr>
                <td><input type="text", name="horarios", placeholder="Horarios"></td>
            </tr>
            <tr>
                <td><input type="text", name="telefonos", placeholder="Telefono"></td>
            </tr>
            <tr>
                <td><input type="file", name="foto", placeholder="Foto"></td>
            </tr>
            <tr>
                <td><input type="text", name="tipo_id", placeholder="TipoID"></td>
            </tr>
            <tr>
            <td><input type="submit", name="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
@endsection