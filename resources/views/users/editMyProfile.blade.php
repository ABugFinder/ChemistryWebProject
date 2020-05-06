@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: 80%">
                <div class="card" style="width: 100%">
                    <div class="card-header">Editar Mi Perfil</div>
                    <div class="card-body">
                        <p>Información actual</p>
                        <p>Usuario: {{$user->username}}</p>
                        <p>Nombre: {{$user->name}} {{$user->surname}}</p>
                        <p>Biografía: {{$user->biografi}}</p>
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
                                <button class="btn btn-primary" type="submit" >Guardar cambios</button>
                            </div>
                          </form>
                    </div>
                    <div class="card-body">
                         <a class="btn btn-primary" href="{{ route('myProfile') }}" role="button">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
