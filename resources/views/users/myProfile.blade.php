@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: 80%">
                <div class="card" style="width: 100%">
                    <div class="card-header">Mi Perfil</div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="#" role="button">Editar mi perfil</a>
                    </div>
                    <div class="card-body">
                        <p>Usuario: {{$user->username}}</p>
                        <p>Nombre: {{$user->name}} {{$user->surname}}</p>
                        <p>Email: {{$user->email}}</p>
                        <p>Chemicoins: {{$user->points}} </p>
                        <p>Artículos comprados: </p>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p>Puntuacion Global:</p>
                        <p>Puntuacion Tetris:</p>
                        <p>Puntuacion Memorama:</p>
                        <p>Puntuacion Duolingo:</p>

                        <a class="btn btn-primary" href="/home" role="button">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
