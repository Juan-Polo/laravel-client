@extends('layouts.plantilla')
@section('content')
    <div class="contenedorEvidencias">








        <div>
            <p>{{ $data['titulo'] }}</p>
            <p>{{ $data['descripcion'] }}</p>

            <p> {{ $data['fechaInicio'] }}</p>

            <p>{{ $data['fechaFin'] }}</p>

            <p> {{ $data['asignatura_id'] }}</p>


        </div>
        <div>


            <iframe src="{{ $urlBase . $data['actividad_url'] }}" style="width:1000px; height:1000px;"></iframe>

        </div>




        @foreach ($data['evidencias'] as $evidencia)
            <div>
                <p> {{ $evidencia['id'] }} </p>
                <p>{{ $evidencia['evidencia_url'] }} </p>

                <p>{{ $evidencia['fechaSubida'] }} </p>
                <p>{{ $evidencia['activity_id'] }} </p>




            </div>
        @endforeach



        <form action="http://127.0.0.1:8000/v1/activities" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="actividad_url" placeholder="actividad_url">
            <input type="text" name="titulo" placeholder="titulo">
            <input type="text" name="descripcion" placeholder="descripcion">
            <input type="datetime-local" name="fechaInicio" placeholder="Fecha y hora de inicio">
            <input type="datetime-local" name="fechaFin" placeholder="Fecha y hora de fin">
            <input type="hidden" name="asignatura_id" value="{{ $data['id'] }}">


            <button type="submit">Guardar</button>
        </form>





    </div>
@endsection
