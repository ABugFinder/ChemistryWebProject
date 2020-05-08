@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 80px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary" style="font-size:22px;">Memorama - Menú principal</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('memoramaDifficulty')}}" role="button"><i class="fas fa-mouse-pointer"></i> Niveles</a>
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{ route('memoramaLeaderboard') }}" role="button"><i class="fas fa-trophy"></i> Leaderboards</a>
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="#" role="button"><i class="fas fa-chalkboard-teacher"></i> ¿Cómo jugar?</a>
                    </div>

                    <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('gamesMenu')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
