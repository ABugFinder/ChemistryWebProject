@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menú principal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <a href="{{route('myProfile')}}"> Mi Perfil</a>
                </div>

                <div class="card-body">
                    <a href="#"> Tetris</a>
                </div>

                <div class="card-body">
                    <a href="#"> Memorama</a>
                </div>

                <div class="card-body">
                    <a href="#"> Duolingo</a>
                </div>

                <div class="card-body">
                    <a href="#"> Tienda</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
