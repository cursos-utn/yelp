@extends('layouts.app')




@section('content')


        <div class="container">
            <h1>Lugares</h1>
            <div id="tabla"></div>
            <button id="anterior">Anterior</button>
            <button id="siguiente">Siguiente</button>
            
<script type="text/javascript">
	var pagina = 1;
	function refrescar(i) {
		$("#tabla").load('/yelp/public/fragmentos/lugares.html?p='+i);	
	}

	refrescar(pagina);
	
	$("#siguiente").click(function() {
		pagina++;
		refrescar(pagina);
	});

	$("#anterior").click(function() {
		pagina--;
		refrescar(pagina);
	});
</script>
           

        </div>

@endsection