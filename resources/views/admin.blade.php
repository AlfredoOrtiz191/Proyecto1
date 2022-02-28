@extends('layouts.app')
@section('admin')
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/clientes">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="/provedores">Provedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="/usuarios">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="/productos">Productos</a>
          </li>
@endsection
@section('content')

<div>
      @yield('s1')
  
    </div>
    <footer class="container-fluid text-center mt-3">
            Creado por: @alfredo_ortiz129
           <br>
            Ideas creativas: yo
    </footer>
    
@endsection
