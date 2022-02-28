@extends('cliente')


@section('encabezado')
<div class="container p-4 p-md-5 mb-4 text-dark rounded alert alert-success" >
    <div class="col-md-6 px-0 mt-4" >
      <h1 class="display-4 fst-italic"><strong>Planta tus sueños y crecerán dias felices</strong></h1>
      <p class="lead my-3">Sorprende a los que mas quieres y hazlo de la manera mas hermosa.</p>
    </div>
  </div>
  <hr class="container featurette-divider">
@endsection


@section('lista')
{{--Agregar Productos--}}
@foreach($productos as $producto)
        <div class="col-lg-3 col-xs-1" align="center">
                <img class="mb-3 d-block mx-auto" src="{{asset($producto->foto)}}" width=200 height=200>

                <h2>{{$producto->name}}</h2>
                <h3> {{$producto->precio}} </h3>
                <p>{{$producto->descripcion}}</p> 
                <p><a class="btn btn-secondary" href="{{url('add-to-cart/'.$producto->id)}}">Comprar</a></p>
            </div>

        @endforeach
{{--Agregar Productos--}}
@endsection

@section('info')
<hr class="featurette-divider justify-content-center">
<div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"> ¿Qué son las plantas? <span class="text-muted" style="font-size:15px;">(Secretaría de Cultura, Recreación y Deporte, 2014)</span></h2>
        <p class="lead"> 
"Las plantas son seres vivos y autosuficientes, es decir que pueden alimentarse solas y crecer solas. Estos seres vivos pertenecen al mundo de los vegetales, pueden vivir en la tierra o en el agua, nos ofrecen sombra en los días muy soleados, y retienen el exceso de agua para que sus hojas estén siempre verdes".</p>
      </div>
      <div class="col-md-5 order-md-1 text-center">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid pl-5" src="https://d7lju56vlbdri.cloudfront.net/var/ezwebin_site/storage/images/_aliases/seo/noticias/estos-son-los-lugares-de-expansion-de-las-plantas-exoticas/5478919-1-esl-MX/Estos-son-los-lugares-de-expansion-de-las-plantas-exoticas.jpg" width="300" height="350">

      </div>
    </div>

    <hr class="featurette-divider">
  <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Beneficios <span class="text-muted" style="font-size:15px;">(Nociones ambientales básicas para profesores rurales y extensionistas, s.f.)</span></h2>
        <p class="lead">"La plantas nos proporcionan alimentos, medicinas, madera, combustible y fibras. Además, brindan cobijo a multitud de otros seres vivos, producen el oxígeno que respiramos, mantienen el suelo, regulan la humedad y contribuyen a la estabilidad del clima".</p>
      </div>
      <div class="col-md-5 text-center">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid pl-5" src="https://ecocosas.com/wp-content/uploads/2020/10/tipos-d-eplantas-1.jpg" width="300" height="300">

      </div>
    
    </div>
    <hr class="featurette-divider">
@endsection
