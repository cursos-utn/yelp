<div class="container">
        <div class="row d-flex">
            <form action="{{URL::to('/search')}}" method="POST" role="search" >
                {{csrf_field()}}
                <div class="input-class d-flex">
                    <input type="text" class="form-control" name="busqueda" placeholder="Inserte su busqueda aqui">
                    <button type="submit" class="btn btn-primary pull-right" style="margin-top:1em">Buscar</button>
                </div>    
            </form>
        </div>
</div>