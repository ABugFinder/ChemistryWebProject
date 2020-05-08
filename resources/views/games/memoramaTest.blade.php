@extends('layouts.app')
@section('content')

<style>
    body{
      background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(9,75,121,1) 0%, rgba(0,212,255,1) 100%);
    }
  </style>
    <div id="cont-game">
        
        <!--Aqui aparece el contador-->
        <p id="contenedor" style="font-size:20px; text-decoration: none; color: #636b6f; padding-left: 47%;">
            Pares encontrados: 0
        </p>
        <p id="contenedorIntentos" style="font-size:20px; text-decoration: none; color: #636b6f; padding-left: 47%;">
            Intentos restantes: 15
        </p>
        
        <!--Frame of the cards-->
        <section id="card-container" class="memory-game"></section>
        
    </div>

    <script src="{{ asset('/js/memoramaTest.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection