@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-header" style="font-size:22px; width: 70%;">
                <div class="card" style="width: 100%">
                    <div class="card-header text-primary" style="font-size:22px;">Mi Perfil</div>
                    <div class="card-header text-primary">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary"href="{{ route('editProfile') }}" role="button"><i class="fas fa-user-edit"></i> Editar</a>
                    </div>
                    <div class="card-body" style="text-align:center; font-size: 18px;">
                        <p><i class="fas fa-user"></i> Nombre: {{$user->name}} {{$user->surname}}</p>
                        <p><i class="fas fa-user-tag"></i> Usuario: {{$user->username}}</p>
                        <p><i class="fas fa-envelope"></i> Email: {{$user->email}}</p>
                        <p><i class="fas fa-key"></i> Password: ***********</p>
                        <p><i class="fas fa-coins"></i> Chemicoins: {{$user->points}} </p>
                        <p><i class="far fa-id-card"></i> Biografía:</p>
                        <p>{{ $user->biografi }}</p>
                    </div>
                    <hr>
                    <div class="card-body" style="text-align:center; font-size: 18px;">
                        <p><i class="fas fa-globe-americas"></i> Puntuación Global: {{ ($user->tetrisrecord + $user->memoramarecord) / 2}}</p>
                        <p><i class="fas fa-bong"></i> Puntuación Tetris: {{$user->tetrisrecord}}</p>
                        <p><i class="fas fa-bong"></i> Puntuación Memorama: {{$user->memoramarecord}}</p>
                    </div>
                    <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary"href="/home" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
