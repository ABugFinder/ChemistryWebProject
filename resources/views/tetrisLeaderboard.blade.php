@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Tetris - Leaderboards</div>

                <div class="card-body" style="width: 50em">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Username</th>
                        <th scope="col">Record</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($records as $record)
                          <tr>
                            <td>{{$record->id}}</td>
                            <td>{{$user[$record->id_user-1]->username}}</td>
                            <td>{{$record->record}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <a style="width: 170px; height: 40px; font-size: 18px;" class="btn btn-outline-primary" href="{{ route('tetrisMenu') }}" role="button"><i class="fas fa-angle-left"></i> Regresar</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
