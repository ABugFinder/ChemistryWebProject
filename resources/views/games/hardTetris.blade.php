@extends('layouts.app')


@section('content')
    <div id="cont-game">   

      <ul id="game-distribution">
        <div id="tetris-container" class="row">

          <li id="element-cards" class="col-sm">
            <div id="contElementos">
              
              <ul id="flex-container">
                <p> Elementos descubiertos</p>
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
              <div style="font-size:20px">
                Siguiente pieza:
              <div id="nextPiece" class="width: 80%;">
                <img style="width: 100%;">
              </div>
          </li>
          <!---------------------------------->
          <li id="game-data" class="col">
             <p>Datos</p>
            <div class="score-div">
              Puntuanción:
              <div id="score">0</div>
            </div>
            <div class="level-div">
              Nivel:
              <div id="level">0</div>
            </div>
            <div class="diffculty-div">
              Dificultad: Difícil
            </div>
            <div class="game-div">
              Modo de juego: Normal
            </div>
          </li>
        </div>
      </ul>

    </div>

    <script src="{{ asset('/js/tetrominoes.js')}}"></script>
    <script src="{{ asset('/js/hardTetris.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
@endsection
