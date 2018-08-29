@extends('layouts.app')




@section('content')


        <div class="container">
            <h1>Lugares</h1>
	<table id="tabla" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
				<th>Barrio</th>
                <th>Horarios</th>

            </tr>

        </thead>

    </table>
            <button id="anterior">Anterior</button>
            <button id="siguiente">Siguiente</button>
            
<script type="text/javascript">
	$(document).ready(function() {
    $('#tabla').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "/yelp/public/api/lugares",
        "pageLength": 3,
        "columns": [
            { "data": "nombre" },
            { "data": "direccion" },
            { "data": "barrio" },
            { "data": "horarios" },
        ]
    } );
} );
</script>
           

        </div>

@endsection