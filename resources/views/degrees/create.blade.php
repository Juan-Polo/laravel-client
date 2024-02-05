<h1>Crear un nuevo grado</h1>



<form action="{{ route('degrees.store') }}" method="POST">


    @csrf
    <label for="name">Nombre: <br> <input type="text" name="name"> </label>
    <br>
    <label for="school_day">Jornada: <br> <input type="text" name="school_day"> </label>
    <br>
    <label for="students">Numero de numeroAlumnos: <br> <input type="text" name="students"> </label>
    <br>
    <br>
    <button type="submit"> Registrate </button>

</form>
