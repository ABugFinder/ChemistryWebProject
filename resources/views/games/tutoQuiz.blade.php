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
                                Esta es la vista dentro de una partida, se puede ver el tablero del juego de quiz e información sobre el estado de la partida, como lo son las respuestas correctas y fallidas, la pregunta del ejercicio actual y las opciones para buscar la respuesta correcta.
                            </p>
                        </div>

                        <div>
                            <img style="width: 90%; display:block; margin:auto;" src="{{ url('/images/Tutoriales/quiz1.png') }}" alt="">
                        </div>
                        
                        <br>
                        
                        <p style="font-size: 22px" align="center">
                            <strong> Objetivo </strong>
                        </p>

                        <p style="font-size: 16px" align="justify">
                            El propósito es motivar al usuario a estudiar química para ayudarle a aprender sobre conceptos básicos de la materia con un divertido formato de preguntas estilo duolingo.
                        </p>
                        
                        <p style="font-size: 16px" align="justify">
                            Mientras aumente la dificultad, cambiarán y aumentarán la cantidad de preguntas, por lo que cada vez se presentarán cuestionarios más complejos.
                        </p>

                        <p style="font-size: 22px" align="center">
                            <strong> Controles </strong>
                        </p>

                        <div>
                            <img style="width: 90%; display:block; margin:auto;" src="{{ url('/images/Tutoriales/quiz2.png') }}" alt="">
                        </div>

                        <br>

                        <p style="font-size: 16px" align="justify">
                            Para seleccionar una respuesta, solo es necesario hacer click izquirdo sobre ella y automáticamente se pasará a la siguiente pregunta, anunciando el resultado. Una vez completado el Quiz, se obtendrá la calificación final de la partida.
                        </p>
                        
                        <br>

                        <div>
                            <img style="width: 90%; display:block; margin:auto;" src="{{ url('/images/Tutoriales/quiz3.png') }}" alt="">
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
