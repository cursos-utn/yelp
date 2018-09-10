<!DOCTYPE html>
<html>
<head>
    <title>Ver</title>
    
</head>
<body>
<div>


	<h1>Ver {{ $lugar->nombre }}</h1>

    
        <p>
            <strong>Nombre:</strong> {{ $lugar->nombre }}<br>
            <strong>Direccion:</strong> {{ $lugar->direccion }}
            <button><a href="/yelp/public/lugares/borrar/{{$lugar->id}}">Borrar</a></button>
            <button><a href="/yelp/public/lugares">Lugares</a></button>
        </p>


</div>
</body>
</html>