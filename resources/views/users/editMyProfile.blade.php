@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: 80%">
                <div class="card" style="width: 100%">
                    <div class="card-header">Mi Perfil</div>
                    <div class="card-body">
                        <p>Información actual</p>
                        <p>Usuario: {{$user->username}}</p>
                        <p>Nombre: {{$user->name}} {{$user->surname}}</p>
                    </div>
                    <div class="card-body">
                        Nuevos datos:
                        <form>
                            <div class="row">
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Nuevo(s) nombre(s)">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Nuevo(s) apellido(s)">
                              </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="biotextarea">Escribe tu biografía</label>
                                    <textarea class="form-control" id="biotextarea" rows="3"></textarea>
                                </div>
                          </form>
                    </div>
                    
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('myProfile') }}" role="button">Cancelar</a>
                        <a class="btn btn-primary" href="#" role="button">Guardar cambios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
