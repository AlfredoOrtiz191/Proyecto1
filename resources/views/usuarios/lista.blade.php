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
        </style>

        <header class="container bg-success">
 <h2 class="text-center text-light display-4">COMUNIDAD DE USUARIOS</h2>
    <nav class="navbar navbar-expand-sm">
           
        <div class="collapse navbar-collapse justify-content-center" id="Mymenu">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="/usuarios">Lista</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Registrar</a>
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
            <div class="row mt-3 ">
                <div class="col-lg-6">
                    <h3 class="text-center" id="sub1"> USUARIOS REGISTRADOS</h3>
                </div>
            </div>
            @if(!empty($cadena))
                <div class="alert alert-success alert-dismissable">
                <strong>{{$cadena}}</strong>
                </div>
            @endif
            <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center table-success">
                            <th>Numero</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>RFC</th>
                    <th>Perfil</th>
                    <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)

                                    <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->RFC}}</td>
                                    <td>{{$user->perfil}}</td>
                                        <td>
                                        <a href="/usuarios/detalle/{{$user->id}}">Ver</a>
                                        <a href="">Editar</a>
                                        <a href="">Eliminar</a>
                                        </td>
                                </tr>
                            
                        @endforeach
                        </tbody>
                </table>
                
            </div>
        </div>
    </div>
    
@endsection



