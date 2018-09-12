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

      <select name="tipo_id">
        <option>Elegir Un Tipo De Lugares</option>
         @foreach($tipo as $unTipo)
      <option value="{{$unTipo->tipo_id}}">
        {{$unTipo->nombre}}
        
      </option>
        @endforeach
        

      </select>
    <input name="nombre" type="text" placeholder="nombre">
    <input type="text" name="direccion" placeholder="direccion"> 
    <input type="submit" name="enviar">
   

</form>


</div>
</body>
</html>