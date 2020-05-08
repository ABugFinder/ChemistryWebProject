@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 80px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Duolingo - Seleccionar Nivel</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto; margin-bottom: 8px;">
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('newbieDuolingo')}}" role="button">Novato</a>
                        </div>
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('easyDuolingo')}}" role="button">Fácil</a>
                        </div>
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('normalDuolingo')}}" role="button">Normal</a>
                        </div>
                    </div>
                        
                    <div class="row" style="margin-left: auto; margin-right: auto; margin-bottom: 8px;">
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('advanceDuolingo')}}" role="button">Avanzado</a>
                        </div>
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('hardDuolingo')}}" role="button">Difícil</a>
                        </div>
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('expertDuolingo')}}" role="button">Experto</a>
                        </div>
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto;">
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('extremeDuolingo')}}" role="button">Extremo</a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('duolingoMenu')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
