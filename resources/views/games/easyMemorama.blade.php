@extends('layouts.app')
@section('content')

<div id="cont-game" style="height: calc(100vh - 190px);" value ="{{$user->id}}">

  <!--Aqui aparece el contador-->
  <div style="position: absolute; right: 132px; text-align: center;">
    <p id="contenedor" style="font-size:20px; text-decoration: none; color: #636b6f;">
      Pares encontrados: 0
    </p>
    <p id="contenedorIntentos" style="font-size:20px; text-decoration: none; color: #636b6f;">
        Intentos restantes: 20
    </p>
    <p id="recordPointsElement" style="font-size:20px; text-decoration: none; color: #636b6f;">
      Puntuación actual: 0
    </p>

    <br>
  @if($medieval > 0)
    <div class="btnMedieval-div" style="margin-left: 47%">
      <button onclick="replaceMedieval()" type="button" class="btn btn-primary">Skin Medieval</button>
    </div>
  @endif
  <br>
    @if($cyber > 0)
    <div class="btnCyebr-div" style="margin-left: 47%">
      <button onclick="replaceCyber()" type="button" class="btn btn-primary">Skin Cyber</button>
    </div>
  @endif
  </div>
  
  <!--Frame of the cards-->
  <section id="card-container" class="memory-game"></section>

</div>

    <script>

      function replaceMedieval() {
        document.body.style.backgroundImage = 'url(../images/medievalBG.png)';
        document.getElementById('contenedor').style.color = 'white';
        document.getElementById('contenedorIntentos').style.color = 'white';
        document.getElementById('recordPointsElement').style.color = 'white';
      }

      function replaceCyber() {
        document.body.style.backgroundImage = 'url(../images/cyberBG.jpg)';
        document.getElementById('contenedor').style.color = 'white';
        document.getElementById('contenedorIntentos').style.color = 'white';
        document.getElementById('recordPointsElement').style.color = 'white';
      }

    </script>


    <script src="{{ asset('/js/easyMemorama.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection
