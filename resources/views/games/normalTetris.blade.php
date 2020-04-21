@extends('layouts.app')


@section('content')
    <div id="cont-game">   

      <ul id="game-distribution">
        <div id="tetris-container" class="row">

          <li id="element-cards" class="col-sm">
            <div id="contElementos">
              
              <ul id="flex-container">
                <p> Elementos descubiertos</p>
                <li id="e1" style=""> Boro - B <br> 10.811 </li> <!-- display: none; para que no aparezcan -->
                <li id="e2" style=""> Hidrógeno - H <br> 1.00794  </li>
                <li id="e3" style=""> Silicio - Si <br> 28.085 </li>
                <li id="e4" style=""> Carbono - C <br> 12.0107 </li>
                <li id="e5" style=""> Germnio - Ge <br> 72.64 </li>
                <li id="e6" style=""> Carbono - C <br> 12.0107 </li>
                <li id="e7" style=""> Arsénico - As <br> 74.92160 </li>
                <li id="e8" style=""> Nitrógeno - N <br> 17.0067 </li>
                <li id="e9" style=""> Antimonio - Sb <br> 121.760 </li>
                <li id="e10" style=""> Oxígeno - P <br> 15.9994 </li>
                <li id="e11" style=""> Telurio - Te <br> 127.6 </li>
                <li id="e12" style=""> Fósforo - Xe <br> 30.973762 </li>
                <li id="e13" style=""> Polonio - Po <br> 209.9824 </li>
                <li id="e14" style=""> Azufre - S <br> 32.065 </li>
                <li id="e15" style=""> Selenio - Se <br> 78.96 </li>
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
              Dificultad: Normal
            </div>
            <div class="game-div">
              Modo de juego: Normal
            </div>
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
