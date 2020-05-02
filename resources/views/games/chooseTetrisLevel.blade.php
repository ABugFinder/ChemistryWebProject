@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tetris - Seleccionar Nivel</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto; margin-bottom: 8px;">
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('newbieTetris')}}" role="button">Novato</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('easyTetris')}}" role="button">Fácil</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('normalTetris')}}" role="button">Normal</a>
                        </div>
                    </div>
                        
                    <div class="row" style="margin-left: auto; margin-right: auto; margin-bottom: 8px;">
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('advanceTetris')}}" role="button">Avanzado</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('hardTetris')}}" role="button">Difícil</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('expertTetris')}}" role="button">Experto</a>
                        </div>
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto;">
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('extremeTetris')}}" role="button">Extremo</a>
                        </div>

                        <div class="col">
                            <a class="btn btn-primary" href="{{route('infiniteTetris')}}" role="button">Infinito</a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('tetrisMenu')}}" role="button">Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
