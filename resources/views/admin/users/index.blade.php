@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header text-primary" style="font-size:22px;">Usuarios</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}} {{$user->surname}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                @can('edit-users')
                                <a href="{{ route('admin.users.edit', $user->id) }}"> <button style="margin-bottom: 5px;" type="button" class="btn btn-primary float-left">Editar</button> </a>
                                @endcan
                                @can('delete-users')
                                <form action="{{route('admin.users.destroy', $user)}}" method="POST" class="float-left">
                                    @endcan
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    <a class="btn btn-primary" href="/home" role="button">Regresar</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
