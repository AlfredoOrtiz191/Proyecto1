@extends('layouts.app')

@section('content')

      <nav class="container navbar navbar-expand-md navbar-dark bg-success">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/login">Provedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/canasta">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/canasta">Productos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

@endsection
