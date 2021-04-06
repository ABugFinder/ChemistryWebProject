@extends('layouts.app')
{{$miscuriosidades}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card glass">

                    <div class="card-header text-primary d-flex justify-content-between" style="font-size:22px;">
                        <div>Conocimientos</div>
                        <div>1/20</div>
                    </div>

                    <div class="card-body">

                        @foreach ($miscuriosidades as $miscuriosidad)
                        <div class="row row-cols-4">
                            <div class="col mb-4">
                                <div class="card glass text-center">
                                  <img src="..." class="card-img-top" alt="imagen memorama medieval">
                                  <div class="card-body">
                                    <h5 class="card-title">{{$miscuriosidad->id_curiosidad}}</h5>
                                        <p class="card-text">Texto</p>
                                  </div>
                                </div>
                              </div>
                        </div>
                        @endforeach
                        


                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection