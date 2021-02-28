@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 140px;">
            <div class="col-md-8">
                <div class="card glass">
                    <div class="card-header text-primary" style="font-size:22px;">Seleccionar mini-juego</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('tetrisMenu')}}" role="button"><i class="fas fa-gamepad"></i> Tetris</a>
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('memoramaMenu')}}" role="button"><i class="fas fa-gamepad"></i> Memorama</a>
                    </div>

                    <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('home')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
