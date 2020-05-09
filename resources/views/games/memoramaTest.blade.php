@extends('layouts.app')
@section('content')

<style>
    body{
      background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(9,75,121,1) 0%, rgba(0,212,255,1) 100%);
    }
</style>
    <div id="cont-game" style="height: calc(100vh - 190px);">

  <!--Aqui aparece el contador-->
  <div style="position: absolute; right: 132px; text-align: center;">
    <p id="contenedor" style="font-size:20px; text-decoration: none; color: #FFF;">
      Pares encontrados: 0
    </p>
    <p id="contenedorIntentos" style="font-size:20px; text-decoration: none; color: #FFF;">
        Intentos restantes: 20
    </p>
    <p id="recordPointsElement" style="font-size:20px; text-decoration: none; color: #FFF;">
      Puntuaci&oacute;n actual: 0
    </p>

  </div>
  
  <!--Frame of the cards-->
  <section id="card-container" class="memory-game"></section>
        

  <script src="{{ asset('/js/memoramaTest.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection