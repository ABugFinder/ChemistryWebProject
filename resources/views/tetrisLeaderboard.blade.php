@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Tetris - Leaderboards</div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Username</th>
                        <th scope="col">Record</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>

                    <a class="btn btn-primary" href="{{ route('tetrisMenu') }}" role="button">Regresar</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
