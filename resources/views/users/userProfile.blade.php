@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: 80%">
                <div class="card" style="width: 100%">

                    <div class="card-header"><h4>Perfil de {{$user->username}}</h4></div>

                        <div class="card-body">
                            <br>
                            <p>Biografía:</p>
                            <p> {{$user->biografi}} </p>
                        </div>
                        <hr>
                        <div class="card-body">
                            <p>Puntuacion Global: {{ ($user->tetrisrecord + $user->memoramarecord) / 2}}</p>
                            <p>Puntuacion Tetris: {{$user->tetrisrecord}}</p>
                            <p>Puntuacion Memorama: {{$user->memoramarecord}}</p>
                            <a class="btn btn-primary" href="/home" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
