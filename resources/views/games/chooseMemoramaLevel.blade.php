@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Memorama - Seleccionar Nivel</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto; margin-bottom: 8px;">
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('newbieMemorama')}}" role="button">Novato</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('easyMemorama')}}" role="button">Fácil</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('normalMemorama')}}" role="button">Normal</a>
                        </div>
                    </div>
                        
                    <div class="row" style="margin-left: auto; margin-right: auto; margin-bottom: 8px;">
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('advanceMemorama')}}" role="button">Avanzado</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('hardMemorama')}}" role="button">Difícil</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('expertMemorama')}}" role="button">Experto</a>
                        </div>
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto;">
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('extremeMemorama')}}" role="button">Extremo</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{route('infiniteMemorama')}}" role="button">Infinito</a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('memoramaMenu')}}" role="button">Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
