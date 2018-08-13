<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
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

    </body>
</html>