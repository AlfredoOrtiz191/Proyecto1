@extends('admin')
@section('s1')
 <header class="container bg-success">
 <h2 class="text-center text-light display-4">COMUNIDAD DE CLIENTES</h2>
    <nav class="navbar navbar-expand-sm">
           
        <div class="collapse navbar-collapse justify-content-center" id="Mymenu">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="/clientes/lista">Lista</a>
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

      <div>
      @yield('l1')
  
    </div>
    <div>
      @yield('s2')
  
    </div>

    <footer class="container-fluid text-light text-center mt-5">
            Creado por: @alfredo_ortiz129
           <br>
            Ideas creativas: Materia Frameworks
    </footer>

@endsection
    

