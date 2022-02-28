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
                <a class="nav-link" href="/productos">Lista</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="/productos/crear">Registrar</a>
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
                    <h3 class="text-center" id="sub1"> Registra los datos</h3>
                </div>
            </div>
    <form method="post" action="{{URL('/usuarios/save')}}">
        {{csrf_field()}}
        <label>Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="Indique su nombre porfavor">
        <label>Correo</label>
        <input type="email" class="form-control" name="correo" placeholder="example.com">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="Indique su contraseña porfavor">
        <label>RFC</label>
        <input type="text" class="form-control" name="RFC" placeholder="Indique su RFC porfavor">
        
        <input type="submit" class="btn btn-info btn-block" value="Guardar" name="btnGuardar">

    </form>
    </div>
    </div>
@endsection
