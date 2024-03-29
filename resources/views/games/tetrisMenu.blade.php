@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card glass">
                    <div class="card-header text-primary" style="font-size:22px;">Tetris - Menú principal</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('tetrisDifficulty')}}" role="button"><i class="fas fa-mouse-pointer"></i> Nivel</a>
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{ route('tetrisLeaderboard') }}" role="button"><i class="fas fa-trophy"></i> Leaderboards</a>
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{ route('tutoTetris') }}" role="button"><i class="fas fa-chalkboard-teacher"></i> ¿Cómo jugar?</a>
                    </div>

                    <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('gamesMenu')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
