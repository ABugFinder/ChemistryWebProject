@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tetris - Menú principal</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a class="btn btn-primary" href="{{route('tetrisDifficulty')}}" role="button">Seleccionar Nivel</a>
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a class="btn btn-primary" href="#" role="button"> Leaderboards</a>
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a class="btn btn-primary" href="#" role="button"> ¿Cómo jugar?</a>
                    </div>

                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('gamesMenu')}}" role="button">Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
