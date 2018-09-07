<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
</head>
<body>
<form method="post">
        
        {{ csrf_field() }}
        <h1>Estas seguro que deseas eliminar {{$datosLugar->nombre}}?</h1>
        <br><br>
        <td><input type="submit", name="Eliminar"></td>
        </tr>
</form>
</body>
</html>