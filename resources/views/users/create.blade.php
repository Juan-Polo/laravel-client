<h1>Nuevo Usuario</h1>

<form action="{{ route('users.store') }}" method="POST">

    @csrf
    <label for="name">Nombre: <br> <input type="text" name="name"> </label>
    <br>
    <label for="lastname">Apellidos: <br> <input type="text" name="lastname"> </label>
    <br>
    <label for="email">Correo electronico: <br> <input type="text" name="email"> </label>
    <br>
    <label for="password">Contraseña <br> <input type="password" name="password"> </label>
    <br>


    <label>Rol:</label>
    <select name="role_id">
        @foreach ($roles as $role)
            <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
        @endforeach
    </select>
    <br>

    <button type="submit"> Registrate </button>



</form>
