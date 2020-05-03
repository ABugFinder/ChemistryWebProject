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
        
        <!--Frame of the cards-->
        <section id="card-container" class="memory-game"></section>

        <br>
        <div class="btnMedieval-div"  style="padding-left: 49%;">
          <button type="button" class="btn btn-primary">Skin Medieval</button>
        </div>
        <br>
        <div class="btnCyebr-div"  style="padding-left: 49%;">
          <button type="button" class="btn btn-primary">Skin Cyber</button>
        </div>
        
    </div>

    <script src="{{ asset('/js/easyMemorama.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection
