@extends('layouts.plantilla')
@section('content')
    <h1>Nuevo Usuario</h1>






    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>Ya tienes alguna cuenta</h3>
                <p>Inicia sesion para entrar a la pagina</p>
                <button id="btn__iniciar-sesion">Iniciar Sesion</button>
            </div>

            <div class="caja__trasera-register">
                <h3>Aun no tienes cuenta</h3>
                <p>Registrate para que puedas iniciar sesion</p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>
        <!-- Formulario de Login y Registro -->
        <div class="contenedor__login-register">
            <!-- Login -->
            <form action="" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico" />
                <input type="password" placeholder="Contraseña" />

                <button class="btn-iniciar-sesion">Entrar</button>
            </form>
            <!-- Registro -->
            <form action="{{ route('users.store') }}" method="POST" class="formulario__register">
                @csrf

                <h2>Registrarse</h2>
                <input type="text" name="name">
                <input type="text" name="lastname">
                <input type="text" name="email">
                <input type="password" name="password">




                <select name="role_id">
                    @foreach ($roles as $role)
                        <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn-registrar"> Registrate </button>

            </form>
        </div>
    </div>
@endsection
