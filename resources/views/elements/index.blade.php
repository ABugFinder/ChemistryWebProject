@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Elementos</div>

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
                        @foreach ($elements as $element)
                          <tr>
                            <td> <a href="{{ route('elements.show', $element->id) }}"> {{$element->name}} </a> </td>
                            <td>{{$element->symbol}}</td>
                            <td>{{$element->atomicNumber}}</td>
                            <td>{{$element->atomicMass}}</td>
                            <td>{{$element->category}}</td>
                            <td>{{$element->elementType}}</td>
                            <td>{{$element->stateMass}}</td>
                            <td>{{$element->group}}</td>
                            <td>{{$element->block}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
