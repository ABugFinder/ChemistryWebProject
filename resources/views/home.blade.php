@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 80px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-primary" style="font-size:22px;">Menú principal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body" style="margin-left: auto; margin-right: auto;">
                    <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('myProfile')}}" role="button"> <i class="fas fa-user"></i> Mi Perfil</a>
                </div>

                <div class="card-body" style="margin-left: auto; margin-right: auto;">
                    <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('gamesMenu')}}" role="button"><i class="fas fa-gamepad"></i> Minijuegos</a>
                </div>

                <div class="card-body" style=" margin-left: auto; margin-right: auto;">
                    <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('duolingoMenu')}}" role="button"><i class="fas fa-gamepad"></i> ChemiQuiz</a>
                </div>

                <div class="card-body" style="margin-left: auto; margin-right: auto;">
                    <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('myStore')}}" role="button"><i class="fas fa-store"></i> Tienda</a>
                </div>

                <div class="card-body" style="margin-left: auto; margin-right: auto;">
                    <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('elements.index')}}" role="button"><i class="fas fa-atom"></i> Elementos</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
