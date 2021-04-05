@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card glass">
                    <div class="card-header text-primary" style="font-size:22px;">Tienda</div>
                        
                    <div class="card-body">

                      <!-- Skin items -->
                    <h4>Arículos - Dinero disponible: $ {{$user->points}}</h4>
                      <div class="row row-cols-4">

                        @for ($i = 0; $i < 4; $i++)
                          <div class="col mb-4">
                            <div class="card glass text-center">
                              <img src="..." class="card-img-top" alt="imagen memorama medieval">
                              <div class="card-body">
                              <h5 class="card-title"> {{ $store[$i]['name'] }}</h5>
                                <p class="card-text">{{ $store[$i]['description'] }}</p>
                                <p>Precio: {{ $store[$i]['price'] }} Chemicoins</p>
                                <form method="POST" action="{{route('purchaseTest')}}">
                                  @csrf
                                  <input type="hidden" id="price" name="price" value="{{$store[$i]['price']}}">
                                  <button type="submit" style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-success" value="{{$i+1}}" name="id"><i class="fab fa-bitcoin"></i> Comprar</button>
                                </form>
                                
                              </div>
                            </div>
                          </div>
                        @endfor


                        
                        
                        @for ($i = 4; $i < 8; $i++)
                          <div class="col mb-4">
                            <div class="card glass text-center">
                              <img src="..." class="card-img-top" alt="imagen memorama medieval">
                              <div class="card-body">
                                <h5 class="card-title"> {{ $store[$i]['name'] }}</h5>
                                  <p class="card-text">{{ $store[$i]['description'] }}</p>
                                  <p>Precio: {{ $store[$i]['price'] }} Chemicoins</p>
                                  <form method="POST" action="{{route('purchaseTest')}}">
                                    @csrf
                                    <input type="hidden" id="price" name="price" value="{{$store[$i]['price']}}">
                                    <button type="submit" value="{{$i+1}}" name="id" style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-danger"><i class="fab fa-bitcoin"></i> Comprar</button>
                                  </form>
                              </div>
                            </div>
                          </div>
                        @endfor
                          
                         <!-- Go back button -->
                        <div class="card-body d-flex align-items-end">
                            <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{route('home')}}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                        </div>
                      <!-- Random tip item -->
                     
                        <div class="col mb-4 ">
                          <div class="card glass text-center" >
                            <img src="..." class="card-img-top" alt="imagen tip">
                            <div class="card-body">
                              <h5 class="card-title">Conocimientos</h5>
                              <p class="card-text">Desbloquea una curiosidad aleatoria sobre la tabla periodica.</p>
                              <p>Precio: 250 Chemicoins</p>
                              <form method="POST" action="{{route('purchaseTest')}}">
                                @csrf
                                <input type="hidden" id="price" name="price" value="">
                                <button type="submit" href="#" onclick="gachaStore();" style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-warning"><i class="fab fa-bitcoin"></i> Comprar</button>

                              </form>
                            </div>
                          </div>
                        </div>
                        

                      <!--<hr>

                       Difficulty items 
                      <h3>Dificultades</h3>-->
                      
                     
                    </div>

                </div>

            </div>
        </div>


    </div>
@endsection