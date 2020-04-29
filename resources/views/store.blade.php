@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Tienda</div>
                        
                    <div class="card-body">

                      <!-- Skin items -->
                      <h3>Diseños</h3>
                      <div class="row row-cols-4">
                          
                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen memorama medieval">
                              <div class="card-body">
                                <h5 class="card-title">Memorama: Mediaval</h5>
                                <p class="card-text">Desbloquea el skin Medieval para Memorama.</p>
                                <p>Precio: 1000 Chemicoins</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                              </div>
                            </div>
                          </div>

                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen tetris medieval">
                              <div class="card-body">
                                <h5 class="card-title">Tetris: Mediaval</h5>
                                <p class="card-text">Desbloquea el skin Medieval para Tetris.</p>
                                <p>Precio: 1000 Chemicoins</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                              </div>
                            </div>
                          </div>

                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen memorama cyber">
                              <div class="card-body">
                                <h5 class="card-title">Memorama: Cyber</h5>
                                <p class="card-text">Desbloquea el skin Cyber para Memorama.</p>
                                <p>Precio: 1000 Chemicoins</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                              </div>
                            </div>
                          </div>

                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen tetris">
                              <div class="card-body">
                                <h5 class="card-title">Tetris: Cyber</h5>
                                <p class="card-text">Desbloquea el skin Cyber para Tetris.</p>
                                <p>Precio: 1000 Chemicoins</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                              </div>
                            </div>
                          </div>
                      </div>
                      <hr>

                      <!-- Random tip item -->
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
                        </div>

                      <hr>

                      <!-- Difficulty items -->
                      <h3>Dificultades</h3>
                      <div class="row row-cols-4">
                          
                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen memorama">
                              <div class="card-body">
                                <h5 class="card-title">Memorama: Experto</h5>
                                <p class="card-text">Desbloquea la dificultad para el juego Memorama.</p>
                                <p>Precio: 1000 Chemicoins</p>
                                <a href="#" class="btn btn-danger">Comprar</a>
                              </div>
                            </div>
                          </div>

                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen tetris">
                              <div class="card-body">
                                <h5 class="card-title">Tetris: Experto</h5>
                                <p class="card-text">Desbloquea la dificultad para el juego Tetris.</p>
                                <p>Precio: 1000 Chemicoins</p>
                                <a href="#" class="btn btn-danger">Comprar</a>
                              </div>
                            </div>
                          </div>

                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen memorama">
                              <div class="card-body">
                                <h5 class="card-title">Memorama: Extremo</h5>
                                <p class="card-text">Desbloquea la dificultad para el juego Memorama.</p>
                                <p>Precio: 1000 Chemicoins</p>
                                <a href="#" class="btn btn-danger">Comprar</a>
                              </div>
                            </div>
                          </div>

                          <div class="col mb-4">
                            <div class="card text-center">
                              <img src="..." class="card-img-top" alt="imagen tetris">
                              <div class="card-body">
                                <h5 class="card-title">Tetris: Extremo</h5>
                                <p class="card-text">Desbloquea la dificultad para el juego Tetris.</p>
                                <p>Precio: 1000 Chemicoins</p>
                                <a href="#" class="btn btn-danger">Comprar</a>
                              </div>
                            </div>
                          </div>
                      </div>

                      <!-- Go back button -->
                      <div class="card-body">
                          <a class="btn btn-primary" href="{{route('home')}}" role="button">Regresar</a>
                      </div>
                    </div>

                </div>

            </div>
        </div>


    </div>S
@endsection