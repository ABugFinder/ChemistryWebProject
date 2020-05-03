@extends('layouts.app')


@section('content')
    <div id="cont-game" value ="{{$user->id}}">   
    
      <ul id="game-distribution">
        <div id="tetris-container" class="row">

          <li id="element-cards" class="col-sm">
            <div id="contElementos">
              
              <ul id="flex-container">
                <p> Elementos descubiertos</p>
                <li id ="e1" style="display: none;"> Helio - He <br> 4.0026  </li> <!-- display: none; para que no aparezcan -->
                <li id ="e2" style="display: none;"> Neón - Ne <br> 20.180 </li>
                <li id ="e3" style="display: none;"> Argón - Ar <br> 39.948 </li>
                <li id ="e4" style="display: none;"> Kriptón - Kr <br> 83.798 </li>
                <li id ="e5" style="display: none;"> Xenón - Xe <br> 131.29 </li>
                <li id ="e6" style="display: none;"> Radón - Mg <br> 140.90765 </li>
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
              Dificultad: Fácil
            </div>
            <div class="game-div">
              Modo de juego: Normal
            </div>
            <br>
            @if($medieval > 0)
              <div class="btnMedieval-div">
                <button type="button" class="btn btn-primary">Skin Medieval</button>
              </div>
            @endif
            <br>
             @if($cyber > 0)
              <div class="btnCyebr-div">
                <button type="button" class="btn btn-primary">Skin Cyber</button>
              </div>
            @endif
          </li>
        </div>
      </ul>

      

    </div>

    <script src="{{ asset('/js/tetrominoes.js')}}"></script>
    <script src="{{ asset('/js/easyTetris.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
@endsection
