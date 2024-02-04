<h1>Crear un nuevo grado</h1>



<form action="{{ route('degrees.store') }}" method="POST">


    @csrf
    <label for="nombre">Nombre: <br> <input type="text" name="nombre"> </label>
    <br>
    <label for="jornada">Jornada: <br> <input type="text" name="jornada"> </label>
    <br>
    <label for="numeroAlumnos">Numero de numeroAlumnos: <br> <input type="text" name="numeroAlumnos"> </label>
    <br>
    <br>
    <button type="submit"> Registrate </button>

</form>
