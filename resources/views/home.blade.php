@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menú principal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('myProfile')}}" role="button"> Mi Perfil</a>
                </div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('gamesMenu')}}" role="button"> Minijuegos</a>
                </div>

                <div class="card-body">
                    <a class="btn btn-primary" href="#" role="button"> Duolingo</a>
                </div>

                <div class="card-body">
                    <a class="btn btn-primary" href="#" role="button"> Tienda</a>
                </div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('elements.index')}}" role="button"> Elementos</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
