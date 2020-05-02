@extends('layouts.app')


@section('content')
    <div id="cont-game" value ="{{$user->id}}">   

      <ul id="game-distribution">
        <div id="tetris-container" class="row">

          <li id="element-cards" class="col-sm">
            <div id="contElementos">
              
              <ul id="flex-container">
                <p> Elementos descubiertos</p>
                <li id ="e1" style="display: none;"> Escandio - Sc <br> 44.955910  </li> <!-- display: none; para que no aparezcan -->
                <li id ="e2" style="display: none;"> Titanio - Ti <br> 47.867 </li>
                <li id ="e3" style="display: none;"> Cromo - Cr <br> 51.9961 </li>
                <li id ="e4" style="display: none;"> Hierro - Fe <br> 55.847 </li>
                <li id ="e5" style="display: none;"> Cobalto - Co - 58.9332 </li>
                <li id ="e6" style="display: none;"> Níquel - Ni <br> 58.6934 </li>
                <li id ="e7" style="display: none;"> Plata - Ag <br> 107.8683 </li>
                <li id ="e8" style="display: none;"> Estaño - Sn <br> 118.710 </li>
                <li id ="e9" style="display: none;"> Tántalo - Ta <br> 180.9479 </li>
                <li id ="e10" style="display: none;"> Wolframio - W <br> 183.84 </li>
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
              Dificultad: Avanzado
            </div>
            <div class="game-div">
              Modo de juego: Normal
            </div>
          </li>
        </div>
      </ul>

    </div>

    <script src="{{ asset('/js/tetrominoes.js')}}"></script>
    <script src="{{ asset('/js/advanceTetris.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
@endsection
