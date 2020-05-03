@extends('layouts.app')


@section('content')
    <div id="cont-game" value ="{{$user->id}}">   

      <ul id="game-distribution">
        <div id="tetris-container" class="row">

          <li id="element-cards" class="col-sm">
            <div id="contElementos">
              
              <ul id="flex-container">
                <p> Elementos descubiertos</p>
                <li id ="e1" style="display: none;"> Lantano - La <br> 138.9055 </li> <!-- display: none; para que no aparezcan -->
                <li id ="e2" style="display: none;"> Cerio - Ce <br> 140.116 </li>
                <li id ="e3" style="display: none;"> Praseodimio - Pr <br> 140.90765 </li>
                <li id ="e4" style="display: none;"> Neodimio - Nd <br> 144.24 </li>
                <li id ="e5" style="display: none;"> Prometio - Pm <br> 145 </li>
                <li id ="e6" style="display: none;"> Samario - Sm <br> 150.35 </li>
                <li id ="e7" style="display: none;"> Europio - Eu <br> 151.964 </li>
                <li id ="e8" style="display: none;"> Galodinio - Gd <br> 157.25 </li>
                <li id ="e9" style="display: none;"> Terbio - Tb <br> 158.92534 </li>
                <li id ="e10" style="display: none;"> Disprosio - Dy <br> 162.5 </li>
                <li id ="e11" style="display: none;"> Holmio - Ho <br> 164.9304 </li>
                <li id ="e12" style="display: none;"> Erbio - Er <br> 167.259 </li>
                <li id ="e13" style="display: none;"> Tulio - Tm <br> 168.934 </li>
                <li id ="e14" style="display: none;"> Iterbio - Yb <br> 173.04 </li>
                <li id ="e15" style="display: none;"> Lutecio - Lu <br> 174.967 </li>
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
              Dificultad: Experto
            </div>
            <div class="game-div">
              Modo de juego: Especial
            </div>
            <br>
            <div class="btnMedieval-div">
              <button type="button" class="btn btn-primary">Skin Medieval</button>
            </div>
            <br>
            <div class="btnCyebr-div">
              <button type="button" class="btn btn-primary">Skin Cyber</button>
            </div>
          </li>
        </div>
      </ul>

    </div>

    <script src="{{ asset('/js/tetrominoes.js')}}"></script>
    <script src="{{ asset('/js/infiniteTetris.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
@endsection
