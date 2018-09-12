<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar</title>
</head>
<body>
    <form method="post">
        
            {{ csrf_field() }}
            <tr>
                <h3>Creado por el usuario {{$creador}}</h3>
            </tr>
            <tr>
                <h3>Editar Nombre</h3>
                <td><input type="text", name="nombre", value={{$datosLugar->nombre}}></td>
            </tr>
            <tr>
                <h3>Editar Direccion</h3>
                <td><input type="text", name="direccion", value={{$datosLugar->direccion}}></td>
            </tr>
            <tr>
                <h3>Editar Barrio</h3>
                <td><input type="text", name="barrio", value={{$datosLugar->barrio}}></td>
            </tr>
            <tr>
                <h3>Editar Horario</h3>
                <td><input type="text", name="horarios", value={{$datosLugar->horarios}}></td>
            </tr>
            <tr>
                <h3>Editar Telefono</h3>
                <td><input type="text", name="telefonos", value={{$datosLugar->telefonos}}></td>
            </tr>
            <tr>
                <h3>Editar Foto</h3>
                <img src="$datosLugar->foto" alt="">
                <td><input type="file", name="foto", value={{$datosLugar->foto}}></td>
            </tr>
            <tr>
                <h3>Editar Tipo de ID</h3>
                <td><input type="text", name="tipo_id", value={{$datosLugar->tipo_id}}></td>
            </tr>
            <tr>
            <br><br>
            <td><input type="submit", name="Actualizar"></td>
            </tr>
    </form>
</body>
</html>