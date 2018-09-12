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

      <select name="tipo_id">
      	<option>Elegir Un Tipo De Lugares</option>
      	 @foreach($tipo as $unTipo)
      <option value="{{$unTipo->id}}">
      	{{$unTipo->nombre}}
      </option>
        @endforeach
      	

      </select>
      
    <input name="nombre" type="text" placeholder="nombre" value="{{ $lugar->nombre }}"> 
    <input type="text" name="direccion" placeholder="direccion"  value="{{ $lugar->direccion }}"> 
    <input type="submit" name="enviar">

</form>


</div>
</body>
</html>