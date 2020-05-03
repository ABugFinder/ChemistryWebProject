@extends('layouts.app')
@section('content')

    <div id="cont-game" value ="{{$user->id}}">

        <!--Aqui aparece el contador-->
        <p id="contenedor" style="font-size:20px; text-decoration: none; color: #636b6f; padding-left: 47%;">
            Pares encontrados: 0
        </p>
        <p id="contenedorIntentos" style="font-size:20px; text-decoration: none; color: #636b6f; padding-left: 47%;">
            Intentos restantes: 20
        </p>
        <p id="recordPointsElement" style="font-size:20px; text-decoration: none; color: #636b6f; padding-left: 47%;">
          Puntuación actual: 0
        </p>
        
        <!--Frame of the cards-->
        <section id="card-container" class="memory-game"></section>

        <br>
        @if($medieval > 0)
              <div class="btnMedieval-div" style="margin-left: 47%">
                <button type="button" class="btn btn-primary">Skin Medieval</button>
              </div>
            @endif
            <br>
             @if($cyber > 0)
              <div class="btnCyebr-div" style="margin-left: 47%">
                <button type="button" class="btn btn-primary">Skin Cyber</button>
              </div>
            @endif
        
    </div>

    <script src="{{ asset('/js/normalMemorama.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection