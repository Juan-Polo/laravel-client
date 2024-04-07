@extends('layouts.plantilla')
@section('title', 'Users')
@section('content')
    {{-- <h1>Crear un nuevo grado</h1> --}}
    <div id="DivformularioDegreesEdit">

        <h1>Actualizar El Grado: {{ $data['degree']['name'] }} </h1>

        <form action="{{ route('degrees.update', $data['degree']['id']) }}" method="POST" enctype="multipart/form-data"
            id="formularioDegreesEdit">
            @csrf
            @method('PUT') <!-- Método PUT para enviar la solicitud de actualización -->

            <label>
                <p>Nombre:</p> <br> <input type="text" name="name" value="{{ $data['degree']['name'] }}">
            </label>

            <label>
                <p>Jornada:</p> <br> <input type="text" name="school_day" value="{{ $data['degree']['school_day'] }}">
            </label>

            <label>
                <p>Numero de alumnos:</p> <br> <input type="number" name="students"
                    value="{{ $data['degree']['students'] }}">
            </label>


            <label>Imagen del Grado</label>




            {{-- <img src="{{ $data['degree']['image'] }}" alt=""> --}}



            <div>
                @foreach ($images['images'] as $image)
                    <label>
                        <input class="input-image" type="radio" name="image" value="{{ $image }}"
                            {{ $data['degree']['image'] == $image ? 'checked' : '' }}>

                        <img src="{{ $image }}" alt="Image"style="width: 200px; height:200px">
                @endforeach
                </label>
            </div>

            <button class="btnCrear" type="submit">Actualizar</button>
            <a class="btnCerrarFormEdit" href="{{ route('degrees.index') }}"> Cerrar</a> <!-- Botón de cerrar -->
        </form>
    </div>
@endsection
