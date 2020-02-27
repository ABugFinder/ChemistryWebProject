@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: 80%">
                <div class="card" style="width: 100%">

                    <div class="card-header"><h4>Perfil de {{$user->username}}</h4></div>

                        <p>Alias: {{$user->username}}</p>
                        <p>Puntos de la tienda:</p>
                        <hr>
                        <p>Puntuacion Global:</p>
                        <p>Puntuacion Tetris:</p>
                        <p>Puntuacion Memorama:</p>
                        <p>Puntuacion Duolingo:</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
