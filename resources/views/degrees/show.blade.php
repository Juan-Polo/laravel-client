<h1> Grado {{ $degree['nombre'] }} </h1>




<form action="{{ route('degrees.update') }}" method="POST">

    @csrf

    <input type="hidden" name="id" value="{{ $degree['id'] }}">

    <label for="nombre">Nombre: <br> <input type="text" name="nombre"value="{{ $degree['nombre'] }}">
    </label>
    <br>
    <label for="jornada">Jornada: <br> <input type="text" name="jornada" value="{{ $degree['jornada'] }}">
    </label>
    <br>
    <label for="numeroAlumnos">Numero de alumnos <br> <input type="text" name="numeroAlumnos"
            value="{{ $degree['numeroAlumnos'] }}">
    </label>
    <br><br>
    <button type="submit"> Actualizar </button>



</form>
