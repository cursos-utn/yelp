<!DOCTYPE html>
<html>
<head>
    <title>Crear</title>
    
</head>
<body>
<div>


<h1>Crear Lugares</h1>

<form method="post" action="/yelp/public/lugares">
      {{ csrf_field() }}
    <input name="nombre" type="text" placeholder="nombre"> {{ $lugar->nombre }}
    <input type="text" name="direccion" placeholder="direccion"> {{ $lugar->direccion }}
    <input type="submit" name="enviar">

</form>


</div>
</body>
</html>