@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Seleccionar mini-juego</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a class="btn btn-primary" href="{{route('tetrisMenu')}}" role="button">Tetris</a>
                    </div>

                    <div class="card-body" style="margin-left: auto; margin-right: auto;">
                        <a class="btn btn-primary" href="{{route('memoramaMenu')}}" role="button"> Memorama</a>
                    </div>

                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('home')}}" role="button">Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
