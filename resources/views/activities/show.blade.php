@extends('layouts.plantilla')
@section('content')
    <div class="contenedorEvidencias">








        <div class="text">
            <p> Titulo: {{ $data['titulo'] }}</p>
            <p> descripcion: {{ $data['descripcion'] }}</p>

            <p> Fecha de Inicio: {{ $data['fechaInicio'] }}</p>

            <p>Fecha de finalizacion: {{ $data['fechaFin'] }}</p>




        </div>
        @php
            $extension = pathinfo($data['actividad_url'], PATHINFO_EXTENSION);

        @endphp

        @if (in_array($extension, ['mp4', 'webm', 'ogg', 'mov']))
            <video controls style="width:800px; height:800px;">
                <source src="{{ $urlBase . $data['actividad_url'] }}" type="video/{{ $extension }}">
                Tu navegador no soporta la reproducción de video.
            </video>
        @elseif($extension === 'pdf')
            <embed src="{{ $urlBase . $data['actividad_url'] }}" type="application/pdf" style="width:1000px; height:1000px;">
        @else
            <p>No se puede mostrar el archivo. Formato no compatible.</p>
        @endif




        @foreach ($data['evidencias'] as $evidencia)
            <div class="evidencia">



                <a href=" {{ $urlBase . $evidencia['evidencia_url'] }} " download=""><i style="font-size: 50px"
                        class="fa-solid fa-file-pdf"></i> </a>
                <p> Fecha de subida: {{ $evidencia['fechaSubida'] }} </p>













            </div>
        @endforeach



        <form class="FormAsignaturas" action="http://127.0.0.1:8000/v1/evidencias" method="POST"
            enctype="multipart/form-data">
            @csrf
            <input class="fileAsignatura" type="file" name="evidencia_url" placeholder="evidencia_url">
            <input type="datetime-local" name="fechaSubida" placeholder="fechaSubida">
            <input type="hidden" name="activity_id" value="{{ $data['id'] }}">


            <button type="submit">Guardar</button>
        </form>





    </div>
@endsection
