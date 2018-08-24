          
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Barrio</th>
                        <th>Horarios</th>
                        <th>Telefonos</th>
                        <th>Escala de Costo</th>
                        <th>Reputacion</th>
                        <th>Tipo</th>
                        
                    </tr>
                </thead>
                @foreach ($list as $unaList)
                    <tr>
                        <td>{{$unaList->nombre}}</td>
                        <td>{{$unaList->direccion}}</td>
                        <td>{{$unaList->barrio}}</td>
                        <td>{{$unaList->horarios}}</td>
                        <td>{{$unaList->telefonos}}</td>
                        <td>{{$unaList->escala_costos}}</td>
                        <td>{{$unaList->reputacion}}</td>
                        <td>{{$unaList->tipo->nombre}}</td>
                    </tr>
                @endforeach
            </table>



