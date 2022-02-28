@extends('layouts.app')


  @section('cliente')
          
          <li class="nav-item">
            <a class="nav-link text-white" href="/cart">Carrito</a>
          </li>
          
@endsection

@section('content')

<main>
@yield('encabezado')


 
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      @yield('lista')
      @yield('carrito')
    </div><!-- /.row -->

    <!-- START THE FEATURETTES -->


    @yield('info')

    

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <!-- Footer -->
<footer class="container text-center mt-5 text-lg-start rounded alert alert-success text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Contactanos por redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-linkedin"></i>
      </a>
      
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i> Vivero Ortiz S.A de C.V.
          </h6>
          <p>
            Contamos con gran variedad de plantas, ademas ideamos tu jardin perfecto.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            <a href="#!" class="text-reset">Plantas</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Abono</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Tierra</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Piedra decorativa</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Eventos
          </h6>
          <p>
            <a href="#!" class="text-reset">Rebajas por registrarte</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Salva una planta</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Descuentos por temporada</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Consejos</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contacto
          </h6>
          <p><i class="bi bi-geo-alt me-3"></i> AV. La Merced #360</p>
          <p>
            <i class="bi bi-envelope me-3"></i>
            viveroOrtiz@gmail.com
          </p>
          <p><i class="bi bi-phone me-3"></i> 477 448 10 54</p>
          <p><i class="bi bi-phone me-3"></i> 477 000 00 00</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4 bg-success">
    
    <a class="text-white" href="/">© 2021 Copyright: bootstrap    Vivero Ortiz S.A de C.V.</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</main>


@endsection
