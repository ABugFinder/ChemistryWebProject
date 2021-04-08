@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card glass">
                    <div class="card-header text-primary" style="font-size:22px;">
        
                    </div>
        
                    <div class="card-body">
                        
                        <div>
                            <p style="font-size: 28px" align="center">
                                <strong> ¿Cómo jugar? </strong>
                            </p>
                            <hr>
                            <p style="font-size: 16px" align="justify">
                                Esta es la vista dentro de una partida, se puede ver el tablero del juego de memorama e información sobre el estado de la partida.
                            </p>
                        </div>

                        <div>
                            <img style="width: 90%; display:block; margin:auto;" src="{{ url('/images/Tutoriales/memorama1.png') }}" alt="">
                        </div>
                        
                        <br>
                        
                        <p style="font-size: 22px" align="center">
                            <strong> Objetivo </strong>
                        </p>

                        <p style="font-size: 16px" align="justify">
                            El propósito es juntar puntos encontrando las parejas de cartas de elementos, en caso de fallar se perderán puntos.
                        </p>
                        
                        <p style="font-size: 16px" align="justify">
                            Mientras aumente la dificultad, participarán grupos de elementos cada vez más grandes, e incluso de varios grupos a la vez, lo que aumentará las probabilidades de equivocarse y por lo tanto de perder puntos.
                        </p>

                        <p style="font-size: 22px" align="center">
                            <strong> Controles </strong>
                        </p>

                        <div>
                            <img style="width: 90%; display:block; margin:auto;" src="{{ url('/images/Tutoriales/memorama2.png') }}" alt="">
                        </div>

                        <br>

                        <p style="font-size: 16px" align="justify">
                            Para seleccionar una tarjeta de elemento solo es necesario hacer click izquierdo sobre ella, y una vez que se seleccione la segunda carta, se compararán y verificarán si son idénticas o no. Una vez que se encuentren todas las parejas la partida terminará.
                        </p>
                        
                        <br>

                        <div>
                            <img style="width: 90%; display:block; margin:auto;" src="{{ url('/images/Tutoriales/memorama3.png') }}" alt="">
                        </div>
    
                    </div>

                    <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('memoramaMenu')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
