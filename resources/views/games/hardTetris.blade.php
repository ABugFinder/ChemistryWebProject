@extends('layouts.app')


@section('content')
<style>
  body{
    background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(9,75,121,1) 0%, rgba(0,212,255,1) 100%);
  }
</style>
    <div id="cont-game" value ="{{$user->id}}">   

      <ul id="game-distribution">
        <div id="tetris-container" class="row">

          <li id="element-cards" class="col-sm">
            <div id="contElementos">
              
              <ul id="flex-container">
                <div id="elements">
                  <p> Elementos descubiertos</p>
                </div>
                <li id ="e1" style="display: none;"> Litio - Li <br> 6.941  </li> <!-- display: none; para que no aparezcan -->
                <li id ="e2" style="display: none;"> Sodio - Na <br> 22.98976 </li>
                <li id ="e3" style="display: none;"> Potasio - K <br> 39.0983 </li>
                <li id ="e4" style="display: none;"> Cesio - Cs <br> 132.90545 </li>
                <li id ="e5" style="display: none;"> Francio - Fr <br> 223 </li>
                <li id ="e6" style="display: none;"> Magnesio - Mg <br> 24.305 </li>
                <li id ="e7" style="display: none;"> Calcio - Ca <br> 40.078 </li>
                <li id ="e8" style="display: none;"> Estroncio - Sr <br> 87.62 </li>
                <li id ="e9" style="display: none;"> Bario - Ba <br> 137.327 </li>
                <li id ="e10" style="display: none;"> Radio - Ra <br> 226.0254 </li>
              </ul>
            </div>   
          </li>
          <!---------------------------------->
          <li id="the-cvs" class="col-md">
            <canvas class="box" id="tetris" width="380" height="700"></canvas>
          </li>
          <!---------------------------------->
          <li id="next-piece" class="col-sm">
            <div style="font-size:20px" id="nextPz">
              Siguiente pieza:
            <div id="nextPiece" class="width: 80%;">
              <img style="width: 100%;">
            </div>
            <img src="/images/tetristuto.png" alt="controles-image" style="width: 85%; margin-top: 10px;">
        </li>
        <!---------------------------------->
        <li id="game-data" class="col">
          
          <div class="score-div" id="score-div">
            <p>Datos</p>
            Puntuanción:
            <div id="score">0</div>
          </div>
          <div class="level-div" id="level-div">
            Nivel:
            <div id="level">0</div>
          </div>
          <div class="diffculty-div" id="diffculty-div">
            Dificultad: Avanzado
          </div>
          <div class="game-div" id="game-div">
            Modo de juego: Normal
          </div>
          <br>
          @if($medieval > 0)
            <div class="btnMedieval-div">
              <button onclick="replaceMedieval()" type="button" style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-primary">Skin Medieval</button>
            </div>
          @endif
          <br>
            @if($cyber > 0)
            <div class="btnCyebr-div">
              <button onclick="replaceCyber()" type="button" style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-primary">Skin Cyber</button>
            </div>
          @endif
          </li>
        </div>
      </ul>

    </div>

    <script>

      function replaceMedieval() {
        document.body.style.backgroundImage = 'url(../images/medievalBG.png)';
        document.getElementById('score-div').style.color = 'white';
        document.getElementById('level-div').style.color = 'white';
        document.getElementById('diffculty-div').style.color = 'white';
        document.getElementById('game-div').style.color = 'white';
        document.getElementById('game-div').style.color = 'white';
        document.getElementById('nextPz').style.color = 'white';
        document.getElementById('elements').style.color = 'white';
      }

      function replaceCyber() {
        document.body.style.backgroundImage = 'url(../images/cyberBG.jpg)';
        document.getElementById('score-div').style.color = 'white';
        document.getElementById('level-div').style.color = 'white';
        document.getElementById('diffculty-div').style.color = 'white';
        document.getElementById('game-div').style.color = 'white';
        document.getElementById('game-div').style.color = 'white';
        document.getElementById('nextPz').style.color = 'white';
        document.getElementById('elements').style.color = 'white';
      }

    </script>

    <script src="{{ asset('/js/tetrominoes.js')}}"></script>
    <script src="{{ asset('/js/hardTetris.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
@endsection
