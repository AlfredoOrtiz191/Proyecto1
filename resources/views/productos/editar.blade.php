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
 <h2 class="text-center text-light display-4">COMUNIDAD DE PRODUCTOS</h2>
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
            
    <form method="post" action="{{URL('/productos/update/'.$producto->id)}}">
        {{csrf_field()}}
        <label>Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="Indique el nombre porfavor" value={{$producto->name}}>
        <label>Categoria</label>
        <input type="text" class="form-control" name="categoria" placeholder="Indique la categoria porfavor" value={{$producto->categoria}}>
        <label>Descripcion</label>
        <input type="text" class="form-control" name="descripcion" placeholder="Indique la descripcion del producto" value={{$producto->descripcion}}>
        <label>Precio</label>
        <input type="number" class="form-control" name="precio" placeholder="Indique su precio porfavor" value={{$producto->precio}}>
        <label>Stock</label>
        <input type="number" class="form-control" name="stock" placeholder="Indique la cantidad porfavor" value={{$producto->stock}}>
        <label>Foto</label><br>
        <input type="text" class="form-control" name="foto" placeholder="Coloque direccion de foto" value={{$producto->foto}}>
        <input type="submit" class="btn btn-info btn-block" value="Guardar" name="btnGuardar">


    </form>
</div>
</div>
    </div>


@endsection

