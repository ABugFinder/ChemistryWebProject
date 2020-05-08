@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 70%">
                <div class="card-header text-primary" style="font-size:22px;">Editar Mi Perfil</div>
                <div class="card-body" style="text-align:center; font-size: 18px;">
                    <p>Información actual</p>
                    <p><i class="fas fa-user"></i> Nombre: {{$user->name}} {{$user->surname}}</p>
                    <p><i class="fas fa-user-tag"></i> Usuario: {{$user->username}}</p>
                    <p><i class="fas fa-envelope"></i> Email: {{$user->email}}</p>
                    <p><i class="fas fa-key"></i> Password: ***********</p>
                    <p><i class="far fa-id-card"></i> Biografía: {{$user->biografi}}</p>
                </div>
                <div class="card-body">
                    Nuevos datos:
                    <form method="POST" action="{{route('updateUser')}}">
                        @csrf
                        <div class="row">
                            <div class="col">
                            <input type="text" id = "name" name = "name" class="form-control" placeholder="Nuevo(s) nombre(s)">
                            </div>
                            <div class="col">
                            <input type="text" id = "last" name = "last" class="form-control" placeholder="Nuevo(s) apellido(s)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="biotextarea">Escribe tu biografía</label>
                                <textarea class="form-control" id="bio" name = "bio" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="card-body">
                            <button style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" type="submit"><i class="fas fa-save"></i> Guardar</button>
                        </div>
                        </form>
                </div>
                <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{ route('myProfile') }}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
