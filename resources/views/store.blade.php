@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Tienda</div>
                        
                    <div class="card-body">

                      <!-- Skin items -->
                    <h4>Arículos - Dinero disponible: $ {{$user->points}}</h4>
                      <div class="row row-cols-4">

                        @for ($i = 0; $i < 4; $i++)
                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen memorama medieval">
                              <div class="card-body">
                              <h5 class="card-title"> {{ $store[$i]['name'] }}</h5>
                                <p class="card-text">{{ $store[$i]['description'] }}</p>
                                <p>Precio: {{ $store[$i]['price'] }} Chemicoins</p>
                                <form method="POST" action="{{route('purchaseTest')}}">
                                  @csrf
                                  <input type="hidden" id="price" name="price" value="{{$store[$i]['price']}}">
                                  <button type="submit" value="{{$i+1}}" name="id" class="btn btn-success">Comprar</button>
                                </form>
                                
                              </div>
                            </div>
                          </div>
                        @endfor
                        
                        
                        @for ($i = 4; $i < 8; $i++)
                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen memorama medieval">
                              <div class="card-body">
                                <h5 class="card-title"> {{ $store[$i]['name'] }}</h5>
                                  <p class="card-text">{{ $store[$i]['description'] }}</p>
                                  <p>Precio: {{ $store[$i]['price'] }} Chemicoins</p>
                                  <form method="POST" action="{{route('purchaseTest')}}">
                                    @csrf
                                    <input type="hidden" id="price" name="price" value="{{$store[$i]['price']}}">
                                    <button type="submit" value="{{$i+1}}" name="id" class="btn btn-danger">Comprar</button>
                                  </form>
                              </div>
                            </div>
                          </div>
                        @endfor
                          
                      <!-- Random tip item --
                      <h3>Tips</h3>

                        <div class="col mb-4">
                          <div class="card text-center" style="margin-left:auto; margin-right:auto; width: 35%;">
                            <img src="..." class="card-img-top" alt="imagen tip">
                            <div class="card-body">
                              <h5 class="card-title">Tips</h5>
                              <p class="card-text">Desbloquea un tip aleatorio.</p>
                              <p>Precio: 100 Chemicoins</p>
                              <a href="#" class="btn btn-warning">Comprar</a>
                            </div>
                          </div>
                        </div>-->

                      <!--<hr>

                       Difficulty items 
                      <h3>Dificultades</h3>-->
                      
                      <!-- Go back button -->
                      <div class="card-body">
                          <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('home')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                      </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
@endsection