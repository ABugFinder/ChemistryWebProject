@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: 80%">
                <div class="card" style="width: 100%">

                    <div class="card-header"><h4>Perfil de {{$user->username}}</h4></div>

                        <div class="card-body">
                            <br>
                            <p>Aquí va la imagen de perfil</p>
                            <p>Aquí va la descripación del usuario</p>
                        </div>
                        <hr>
                        <div class="card-body">
                            <p>Puntuacion Global:</p>
                            <p>Puntuacion Tetris:</p>
                            <p>Puntuacion Memorama:</p>
                            <p>Puntuacion Duolingo:</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
