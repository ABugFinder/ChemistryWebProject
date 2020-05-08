@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 150px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary" style="font-size:22px;"> Memorama - Seleccionar Nivel</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto; margin-bottom: 8px;">
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('newbieMemorama')}}" role="button"><i class="fas fa-smile"></i> Novato</a>
                        </div>
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('easyMemorama')}}" role="button"><i class="fas fa-laugh-squint"></i> Fácil</a>
                        </div>
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('normalMemorama')}}" role="button"><i class="fas fa-meh"></i> Normal</a>
                        </div>
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto; margin-bottom: 8px;">
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('advanceMemorama')}}" role="button"><i class="fas fa-flushed"></i> Avanzado</a>
                        </div>
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('hardMemorama')}}" role="button"><i class="fas fa-dizzy"></i> Difícil</a>
                        </div>

                        @if ($expert > 0)
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('expertMemorama')}}" role="button"><i class="fas fa-angry"></i> Experto</a>
                        </div>
                        @endif

                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto;">

                        @if ($extreme > 0)
                        <div class="col">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('extremeMemorama')}}" role="button"><i class="fas fa-skull-crossbones"></i> Extremo</a>
                        </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('memoramaMenu')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
