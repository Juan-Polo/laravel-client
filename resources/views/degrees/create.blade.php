@extends('layouts.plantilla')

@section('content')
    <h1>Crear un nuevo grado</h1>

    <div><button id="btnMostrarFormulario">agregar grado</button></div>

    <form action="{{ route('degrees.store') }}" method="POST" enctype="multipart/form-data" id="formularioDegrees">

        @csrf
        <label>Nombre: <br> <input type="text" name="name"> </label>
        <br>
        <label>Jornada: <br> <input type="text" name="school_day"> </label>
        <br>
        <label>Numero de alumnos: <br> <input type="number" name="students"> </label>
        <label>Adjuntar archivo PDF</label>
        <br><br>



        @foreach ($data['images'] as $image)
            <label>
                <input type="radio" name="image" value="{{ $image }}">
                <img src="{{ $image }}" alt="Imagen" style="width: 200px">
            </label>
        @endforeach



        <br><br>

        <button type="submit"> Crear </button>

        <button type="button" id="btnCerrarFormulario">Cerrar</button> <!-- Botón de cerrar -->



    </form>
@endsection
