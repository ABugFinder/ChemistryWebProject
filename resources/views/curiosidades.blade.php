@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card glass">

                    <div class="card-header text-primary d-flex justify-content-between" style="font-size:22px;">
                        <div>Conocimientos</div>
                    </div>

                    <div class="card-body">
                        <div class="row row-cols-4">
                            @foreach ($miscuriosidades as $miscuriosidad)
                            
                                <div class="col mb-4">
                                    <div  style="min-height: 700px;" class="card glass text-center" >
                                      <img src="{{$miscuriosidad->imagen}}" style="min-height: 300px;" class="card-img-top rounded mx-auto d-block" alt="">
                                      <div class="card-body">
                                        <h5 class="card-title">{{$miscuriosidad->nombre}}</h5>
                                            <p class="card-text">{{$miscuriosidad->contenido}}</p>
                                      </div>
                                    </div>
                                </div>
                            
                            @endforeach
                        </div>
                    </div>

                       
                        


                    
                </div>
            </div>            
        </div>
    </div>
@endsection