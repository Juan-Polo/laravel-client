@vite(['resources/css/login.css', 'resources/css/stylechat.css', 'resources/css/pdf.css', 'resources/css/tareas_class.css', 'resources/css/app.css', 'resources/css/table-index.css', 'resources/css/perfil.css', 'resources/css/grados.css', 'resources/css/forms.css', 'resources/css/interfaz_grado.css', 'resources/css/asignaturas.css', 'resources/js/app.js', 'resources/js/forms.js', 'resources/js/mostrar_contenido.js', 'resources/js/login.js', 'resources/js/carrousel.js', 'resources/js/pre-fre.js'])


<div class="contenedor__todo">
    <div class="caja__trasera">

        <img style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -3;"
            src="{{ asset('img/AnimatedShapelogin.svg') }}" alt="">
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
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="email" placeholder="Correo Electronico">
            <input type="password" name="password" placeholder="Contraseña">




            <select name="role_id">
                @foreach ($roles as $role)
                    <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn-registrar"> Registrate </button>

        </form>
    </div>
</div>
