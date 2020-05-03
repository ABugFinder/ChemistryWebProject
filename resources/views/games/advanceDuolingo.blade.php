@extends('layouts.app')


@section('content')
    <div id="cont-game" value ="{{$user->id}}">
      <div class="containerPoints">
        <div class="results">
          <li id="game-data" class="col">
            <p>Respuestas</p>
           <div class="good-div">
             Correctas:
             <div id="goodAnswer">0</div>
             <hr>
           </div>
           <div class="bad-div">
             Incorrectas:
             <div id="badAnswer">0</div>
           </div>
         </li>
        </div>
      </div>

        <div class="conteeiner">
            <div id="question-container" class="hide">
              <div id="question">Question</div>
              <div id="answer-buttons" class="btn-grid">
                <button class="btn">Answer 1</button>
                <button class="btn">Answer 2</button>
                <button class="btn">Answer 3</button>
                <button class="btn">Answer 4</button>
              </div>
            </div>
            <div class="controls">
              <button id="start-btn" class="start-btn btn">Start</button>
              <button id="next-btn" class="next-btn btn hide">Next</button>
            </div>
          </div>
    </div>

    <script src="{{ asset('/js/advanceDuolingo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
@endsection
