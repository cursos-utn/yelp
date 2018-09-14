@extends('layouts.app')




@section('content')
			
			<div class="container">

				<div class="d-flex align-items-end">

			@if(Auth::check())
			<a  href = "/yelp/public/logout"class="btn btn-danger ml-auto">Logout</a>
			<a  href = "/yelp/public/lugares/crear"class="btn btn-primary">Añadir Lugar</a>
            <a href="/yelp/public/lugares" class = "btn btn-info">Editar Lugar</a>

		
			@else

			<a  href = "/yelp/public/login"class="btn btn-info ml-auto">Login</a>
			<a href = "/yelp/public/register" class="btn btn-success">Registrarse</a>

			@endif



			<label class="ml-5" for= "buscar"><strong>Buscar</strong><input type="text" name="buscar" id="buscar"></label>

			</div>
			</div>



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

				$("#buscar").keyup(function(){
					var valor = $("#buscar").val();
					$("#tabla").load('/yelp/public/fragmentos/lugares.html?p=1&q='+valor);

				})
			</script>
           

        </div>

@endsection