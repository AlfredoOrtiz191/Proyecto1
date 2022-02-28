@extends('cliente')
@section('cliente')
      
          <li class="nav-item">
            <a class="nav-link text-white" href="/">Inicio</a>
          </li>
          
@endsection
@section('carrito')
    <div class="container">
      <div class="row text-center mt-2 container">
      <h1  class="display-4 fst-italic mb-5">CARRITO DE COMPRAS</h1>
       <!---CART-->
       <?php $valor=0 ?>
       @if(session('cart'))
    <table class="table table-striped" >
     <thead class="table-success">
       <tr>
          
              <th>IMAGEN</th>
              <th>NOMBRE</th>
              <th>DESCRIPCION</th>
              <th>PRECIO</th>
              <th>CANTIDAD</th>
              <th>IMPORTE</th>
              <th>ADD</th>
              <th>REDUCIR</th>
   
       </tr>
       </thead>
       
       @foreach (session('cart') as $id=>$details)
       <?php $valor += $details['precio'] * $details['quantity'] ?>
           
       <tr>
         
         <td><img src="{{$details['foto']}}" width="15%"></td>
         <td>{{$details['name']}}</td>
         <td>{{$details['descripcion']}}</td>
         <td>{{$details['precio']}}</td>
         <td>{{$details['quantity']}}</td>
         <td>{{$details['precio'] * $details['quantity']}}</td>
         <td><a href= "{{url('add-to-cart/'.$id)}}"><img src="{{asset('img/mas.jpg')}}" width="50" height="50"></a></td>
          <td><a href= '{{url('reduce/'.$id)}}'><img src="{{asset('img/menos.jpg')}}" width="50" height="50"></a></td>
        </tr>
        @endforeach
        </table> 
        @endif
        <!---CART-->
        <table align="right">
        <th>
        <div>
        <p></p>
        <h3>Total  ${{$valor}}</h3>
        <h3>IVA   ${{$valor*0.16}}</h3>
        <h3>Total Con IVA  ${{$valor+$valor*0.16}}</h3>
        </div> 
        </th>
        </table>

       </div>
       
          <a href= '/'>Comprar Más productos</a> &nbsp; &nbsp; &nbsp;
          <a href= '#'>Vaciar la Cesta</a>
          &nbsp; &nbsp; &nbsp;
          <a href= '#'>Mostrar Resumen</a>
        
   
       </div>
@endsection
