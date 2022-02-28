@extends('admin')
@section('s1')
<div id="app">
        <style>
        table {
    border-collapse: collapse;
    border-radius: 1em;
    overflow: hidden;
  }
  
  th, td {
    padding: 1em;
    border-bottom: 4px solid rgb(0, 0, 0); 
  }
  .navbar-brand{
    color: #fff;
    font-size: 20px;
    list-style: none;
}

.nav{
    width: 100%;
}
.nav li a{
    color: #ffffff;
    width: 180px;
    text-align: center;
    font-size: 15px;
}
.nav li a:hover{
    background-color: rgba(57, 119, 100, 0.788);
    font-size: 16px;
}
#sub1{
    text-align:center;
}
        </style>

        <header class="container bg-success">
 <h2 class="text-center text-light display-4">COMUNIDAD DE CLIENTES</h2>
    <nav class="navbar navbar-expand-sm">
           
        <div class="collapse navbar-collapse justify-content-center" id="Mymenu">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="/clientes">Lista</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes/crear">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/carrito">Carrito</a>
                </li>
                
            </ul>
        </div>
    </nav>
</header>


 <div class="container">
            <div class="row mt-3">
                <div class="col-md-6 offset-md-3">
                    <h3 class="text-center" id="sub1"> Detalle Cliente N. {{$cliente->id}}</h3>
                    <img class="mb-3 d-block mx-auto" src="{{asset($cliente->foto)}}" width=200 height=200>
                </div>
            </div>
            
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center table-success">
                            
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($cliente))

                                <tr>
                                    
                                    <td>{{$cliente->name}}</td>
                                    <td>{{$cliente->apellido}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->direccion}}</td>
                                        
                                </tr>
                            
                        @endif
                        </tbody>
                </table>
            </div>
        </div>
    </div>
        
      




@endsection