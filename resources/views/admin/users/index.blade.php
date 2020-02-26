@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Usuarios</div>

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
                                <a href="{{ route('admin.users.edit', $user->id) }}"> <button type="button" class="btn btn-primary float-left">Editar</button> </a>
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
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
