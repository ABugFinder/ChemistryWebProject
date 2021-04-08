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
                                Esta es la vista dentro de una partida, se puede ver el tablero del juego de tetris e información sobre el estado de la partida.
                            </p>
                        </div>

                        <div>
                            <img style="width: 90%; display:block; margin:auto;" src="{{ url('/images/Tutoriales/tetris2.png') }}" alt="">
                        </div>
                        
                        <br>
                        
                        <p style="font-size: 22px" align="center">
                            <strong> Objetivo </strong>
                        </p>

                        <p style="font-size: 16px" align="justify">
                            El propósito es juntar puntos limpiando filas de piezas para poder descubrir grupos de elementos, dependiendo de la dificultad seleccionada, aumentará o disminuirá la cantidad de elementos por descubir así como la velocidad de caída de las pieazas.
                        </p>
                        
                        <p style="font-size: 16px" align="justify">
                            La interfaz se divide en 4 bloques: La sección de elementos descubiertos, que se basa en la puntuación, el tablero del juego, la sección de la sigueinte pieza y los controles para jugar, y por último los Datos del juego, donde aparece la puntuación, el nivel de dificultad y el modo de juego.
                        </p>

                        <p style="font-size: 22px" align="center">
                            <strong> Controles </strong>
                        </p>

                        <div>
                            <img style="width: 90%; display:block; margin:auto;" src="{{ url('/images/Tutoriales/tetris3.png') }}" alt="">
                        </div>

                        <br>

                        <p style="font-size: 16px" align="justify">
                            Para mover la pieza de lugar se deben utilizar las teclas A y D para mover izquierda y derecha respectivamente. Y para poder girar la orientación se utiliza la tecla E.
                        </p>
                        
                        <br>
    
                    </div>

                    <div class="card-body">
                        <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('tetrisMenu')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
