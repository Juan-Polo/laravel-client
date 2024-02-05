<h1> Grado {{ $degree['name'] }} </h1>




<form action="{{ route('degrees.update') }}" method="POST">

    @csrf

    <input type="hidden" name="id" value="{{ $degree['id'] }}">

    <label for="name">Nombre: <br> <input type="text" name="name"value="{{ $degree['name'] }}">
    </label>
    <br>
    <label for="school_day">Jornada: <br> <input type="text" name="school_day" value="{{ $degree['school_day'] }}">
    </label>
    <br>
    <label for="students">Numero de alumnos <br> <input type="text" name="students"
            value="{{ $degree['students'] }}">
    </label>
    <br><br>
    <button type="submit"> Actualizar </button>



</form>
