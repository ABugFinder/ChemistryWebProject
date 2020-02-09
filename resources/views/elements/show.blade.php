@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
            <div class="card-header"> <a href="{{ route('elements.show', $element->id-1) }}"> Previous Element </a> - Current Element {{$element->name}} - <a href="{{ route('elements.show', $element->id+1) }}"> Next Element </a> </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Symbol</th>
                              <th scope="col">Atomic Number</th>
                              <th scope="col">Atomic Mass</th>
                              <th scope="col">Category</th>
                              <th scope="col">Element Type</th>
                              <th scope="col">State Mass</th>
                              <th scope="col">Group</th>
                              <th scope="col">Block</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <th scope="row">{{$element->id}}</th>
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
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
