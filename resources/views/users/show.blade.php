<h1> Usuario {{ $user['name'] }} </h1>

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
    <br>
    {{-- <label for="password">Contraseña <br> <input type="password" name="password" value="{{ $user['password'] }}"> --}}
    </label>
    <br>
    <label for="role_id">Role <br> <input type="text" name="role_id" value="{{ $user['role_id'] }}">
    </label>
    <br><br>
    <button type="submit"> Actualizar </button>



</form>
