@extends('layouts.app')


@section('content')
    <div id="cont-game" value ="{{$user->id}}">   

      <ul id="game-distribution">
        <div id="tetris-container" class="row">

          <li id="element-cards" class="col-sm">
            <div id="contElementos">
              
              <ul id="flex-container">
                <p> Elementos descubiertos</p>
                <li id="e1" style="display: none;"> Boro - B <br> 10.811 </li> <!-- display: none; para que no aparezcan -->
                <li id="e2" style="display: none;"> Hidrógeno - H <br> 1.00794  </li>
                <li id="e3" style="display: none;"> Silicio - Si <br> 28.085 </li>
                <li id="e4" style="display: none;"> Carbono - C <br> 12.0107 </li>
                <li id="e5" style="display: none;"> Germnio - Ge <br> 72.64 </li>
                <li id="e6" style="display: none;"> Carbono - C <br> 12.0107 </li>
                <li id="e7" style="display: none;"> Arsénico - As <br> 74.92160 </li>
                <li id="e8" style="display: none;"> Nitrógeno - N <br> 17.0067 </li>
                <li id="e9" style="display: none;"> Antimonio - Sb <br> 121.760 </li>
                <li id="e10" style="display: none;"> Oxígeno - P <br> 15.9994 </li>
                <li id="e11" style="display: none;"> Telurio - Te <br> 127.6 </li>
                <li id="e12" style="display: none;"> Fósforo - Xe <br> 30.973762 </li>
                <li id="e13" style="display: none;"> Polonio - Po <br> 209.9824 </li>
                <li id="e14" style="display: none;"> Azufre - S <br> 32.065 </li>
                <li id="e15" style="display: none;"> Selenio - Se <br> 78.96 </li>
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
    <script src="{{ asset('/js/normalTetris.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
@endsection
