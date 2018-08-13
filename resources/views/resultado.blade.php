<div class="container">
   @if(isset($lugares))

   <h2>Lugares encontrados</h2>
   <table class="table table-striped">
       <thead>
           <tr>
               <th>Nombre</th>
               <th>Direccion</th>
           </tr>
       </thead>
       <tbody>
           @foreach($lugares as $cadaLugar)
           <tr>
               <td>{{$cadaLugar->nombre}}</td>
               <td>{{$cadaLugar->direccion}}</td>
           </tr>
           @endforeach
       </tbody>
   </table>
   @else
    <p>{{ $mensaje }}</p>
   @endif
</div>