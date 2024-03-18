@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')


    {{-- <h1> Usuario {{ $user['name'] }} </h1>

<form action="{{ route('users.update') }}" method="POST">

    @csrf

    <input type="hidden" name="id" value="{{ $user['id'] }}">

    <label for="name">Nombre: <br> <input type="text" name="name"value="{{ $user['name'] }}">
    </label>
    <br>
    <label for="lastname">Apellidos: <br> <input type="text" name="lastname" value="{{ $user['lastname'] }}">
    </label>
    <br>
    <label for="email">Correo electronico: <br> <input type="text" name="email" value="{{ $user['email'] }}">
    </label>
    <br> --}}
    {{-- <label for="password">Contraseña <br> <input type="password" name="password" value="{{ $user['password'] }}"> --}}
    {{-- </label>
    <br>
    <label for="role_id">Role <br> <input type="text" name="role_id" value="{{ $user['role_id'] }}">
    </label>
    <br><br>
    <button type="submit"> Actualizar </button>



</form> --}}








    <div class="perfil">
        <button id="button_desplegable_perfil" onclick="Mostrar_Ocultar();">
            <ul id="left_opciones">
                <a href="login.html">
                    <li>
                        <p>Registrarse</p>
                    </li>
                </a>
                <a href="login.html">
                    <li>
                        <p>Iniciar sesion</p>
                    </li>
                </a>
            </ul>
        </button>

        <div class="portada"></div>
        <div class="foto_perfil">
            <div class="foto">


                @if (isset($user['image']['image_url']))
                    <img src="{{ $urlBase . $user['image']['image_url'] }}" alt="">
                @else
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="">
                @endif




            </div>








            <p>
                <span>Nombre:</span> {{ $user['name'] }} <br /><br />
                <span>Rol: </span>Admin
            </p>
            <div class="tuerca" onclick="Mostrar_Ocultar_Tuerca();">
                <img src="img/tuerca.png" alt="" />

                <ul id="desplegable_tuerca">
                    <a href="editar_perfil.html">
                        <li>Editar Perfil</li>
                    </a>

                    <a href="opciones_perfil.html">
                        <li>Mi cuenta</li>
                    </a>

                    <a href="index.html">
                        <li>Cerra Sesion</li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="publicaciones">
            <button>
                <img src="img/usuario-informacion.png" alt="" /> informacion
            </button>
            <p><img src="img/comentario.png" alt="" />Comentarios</p>
        </div>

        <div class="subidas">
            <p>No Hay Publicaciones</p>

            <img src="img/cara-triste.png" alt="" />
        </div>


    @endsection
