@extends('layouts.app')
@section('content')

    <div id="cont-game">

        <!--Aqui aparece el contador-->
        <p id="contenedor" style="font-size:20px; text-decoration: none; color: #636b6f; padding-left: 47%;">
            Pares encontrados: 0
        </p>
        <p id="contenedorIntentos" style="font-size:20px; text-decoration: none; color: #636b6f; padding-left: 47%;">
            Intentos restantes: 18
        </p>
        
        <!--Frame of the cards-->
        <section id="card-container" class="memory-game"></section>
        
    </div>

    <script src="{{ asset('/js/advanceMemorama.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection