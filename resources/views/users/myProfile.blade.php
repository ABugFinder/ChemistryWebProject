@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: 80%">
                <div class="card" style="width: 100%">
                    <div class="card-header">Mi Perfil</div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('editProfile') }}" role="button">Editar mi perfil</a>
                    </div>
                    <div class="card-body">
                        <p>Usuario: {{$user->username}}</p>
                        <p>Nombre: {{$user->name}} {{$user->surname}}</p>
                        <p>Email: {{$user->email}}</p>
                        <p>Chemicoins: {{$user->points}} </p>
                        <p>Biografía:</p>
                        <p>{{ $user->biografi }}</p>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p>Puntuacion Global: {{ ($user->tetrisrecord + $user->memoramarecord) / 2}}</p>
                        <p>Puntuacion Tetris: {{$user->tetrisrecord}}</p>
                        <p>Puntuacion Memorama: {{$user->memoramarecord}}</p>

                        <a class="btn btn-primary" href="/home" role="button">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
