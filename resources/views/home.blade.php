@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body"> 
                    <a href="#"> My Profile</a>
                </div>

                <div class="card-body"> 
                    <a href="#"> Tetris Menu</a>
                </div>

                <div class="card-body"> 
                    <a href="#"> Memory Menu</a>
                </div>

                <div class="card-body"> 
                    <a href="#"> Duolingo Menu</a>
                </div>

                <div class="card-body"> 
                    <a href="#"> Store Menu</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
