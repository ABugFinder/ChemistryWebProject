@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
            <div class="card-header text-primary" style="font-size:22px;">
                
                <?php
                    if($element->id == 1){
                        echo '<a href="118"> Elemento Anterior</a> - Elemento Actual '; 
                        echo $element->name;
                        echo ' - <a href="'; echo $element->id+1; echo '"> Siguiente Elemento </a>';
                    } else if($element->id == 118){
                        echo ' - <a href="'; echo $element->id-1; echo '"> Elemento Anterior </a> - Elemento Actual ';
                        echo $element->name;
                        echo ' - <a href="1"> Siguiente Elemento </a>';
                    } else {
                        echo ' - <a href="'; echo $element->id-1; echo '"> Elemento Anterior </a> - Elemento Actual ';
                        echo $element->name;
                        echo ' - <a href="'; echo $element->id+1; echo '"> Siguiente Elemento </a>';
                    }
                ?> 

            </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Símbolo</th>
                                <th scope="col">Número Atómico</th>
                                <th scope="col">Masa Atómica</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Tipo de Elemento</th>
                                <th scope="col">Estado de la Materia</th>
                                <th scope="col">Grupo</th>
                                <th scope="col">Bloque</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>{{$element->name}}</td>
                                <td>{{$element->symbol}}</td>
                                <td>{{$element->atomicNumber}}</td>
                                <td>{{$element->atomicMass}}</td>
                                <td>{{$element->category}}</td>
                                <td>{{$element->elementType}}</td>
                                <td>{{$element->stateMass}}</td>
                                <td>{{$element->group}}</td>
                                <td>{{$element->block}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <hr>
                        {{$element->description}}
                    </p>

                    <div>
                        <img src="/images/elementDescription/{{$element->atomicNumber}}.jpg" alt="" width="500"  style="display: block; margin-left: auto; margin-right: auto;">
                    </div>
                    <br>
                    <p>
                        <?php
                            // Shows a video about fun facts of bismuth
                            if($element->atomicNumber==83){
                                echo '<iframe  style="display: block; margin-left: auto; margin-right: auto;" width="560" height="315" src="https://www.youtube.com/embed/C3uawwBg4CY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                            }
                        ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
