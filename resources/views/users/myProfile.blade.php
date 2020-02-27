@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: 80%">
                <div class="card" style="width: 100%">
                    <div class="card-header">Usuarios</div>

                    <h2>Mi perfil</h2>
                    <p>Usuario: {{$user->username}}</p>
                    <p>Nombre(s) del usuario: {{$user->name}}</p>
                    <p>Apellido(s): {{$user->surname}}</p>
                    <p>Email del usuario: {{$user->email}}</p>
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
