<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
    
</head>
<body>
<div>


<h1>Editar Lugares</h1>

<form method="post" action="/yelp/public/lugares/{{$lugar->id}}">
      {{ csrf_field() }}
    <input name="nombre" type="text" placeholder="nombre" value="{{ $lugar->nombre }}"> 
    <input type="text" name="direccion" placeholder="direccion"  value="{{ $lugar->direccion }}"> 
    <input type="submit" name="enviar">

</form>


</div>
</body>
</html>