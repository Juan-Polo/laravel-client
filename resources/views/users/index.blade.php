@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')


    <h1>USERS</h1>


    <table class="table-users-index">
        <thead>
            <tr>

                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>

                <th>Rol</th>
                <th></th>
                <th></th>
            </tr>


        </thead>

        <tbody>

            @foreach ($data as $user)
                <tr>
                    <td> {{ $user['name'] }} </td>
                    <td>{{ $user['lastname'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    {{-- <td>{{ $user['password'] }}</td> --}}
                    <td>{{ $user['role_id'] }}</td>
                    <td> <a href="{{ route('users.show', $user['id']) }}">Ver</a> </td>
                    <td> <a href="{{ route('users.destroy', $user['id']) }}">Eliminar</a></td>

                </tr>
            @endforeach
        </tbody>


    </table>


@endsection
