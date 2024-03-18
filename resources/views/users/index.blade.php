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
                <th>Imagen</th>
                <th>Id Img</th>
            </tr>


        </thead>

        <tbody>

            @foreach ($data as $user)
                <tr>
                    <td> {{ $user['name'] }} </td>
                    <td>{{ $user['lastname'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    {{-- <td>{{ $user['password'] }}</td> --}}
                    <td>{{ $user['role']['name'] }}</td>
                    <td>
                        @if (isset($user['image']['image_url']))
                            <img src="{{ $urlBase . $user['image']['image_url'] }}" alt=""
                                style="width: 150px;height:150px">
                        @else
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt=""
                                style="width: 150px;height:150px">
                        @endif
                    </td>

                    <td>
                        {{-- <img src="{{ $user['image']['portada_url'] }}" alt="" style="width: 200px;height:150px"> --}}

                    </td>
                    {{-- <td>{{ $user['image']['id'] ?? '' }}</td> --}}

                    <td> <a href="{{ route('users.show', $user['id']) }}">Ver</a> </td>
                    <td> <a href="{{ route('users.destroy', $user['id']) }}">Eliminar</a></td>


                </tr>
            @endforeach
        </tbody>


    </table>


@endsection
