<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1>Tipo {{$tipo->nombre}}</h1>
            
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
                @foreach ($tipo->lugares as $unLugar)
                    <tr>
                        <td>{{$unLugar->nombre}}</td>
                        <td>{{$unLugar->direccion}}</td>
                        <td>{{$unLugar->barrio}}</td>
                        <td>{{$unLugar->horarios}}</td>
                        <td>{{$unLugar->telefonos}}</td>
                        <td>{{$unLugar->escala_costos}}</td>
                        <td>{{$unLugar->reputacion}}</td>
                        <td>{{$unLugar->tipo->nombre}}</td>
                    </tr>
                @endforeach
            </table>

        </div>

    </body>
</html>