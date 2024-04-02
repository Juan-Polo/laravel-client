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
            <div class="evidencia">
                <p> {{ $evidencia['id'] }} </p>


                <p>{{ $evidencia['fechaSubida'] }} </p>




                <a href=" {{ $urlBase . $evidencia['evidencia_url'] }} " download=""><i style="font-size: 50px"
                        class="fa-solid fa-file-pdf"></i> </a>




                <p>{{ $evidencia['activity_id'] }} </p>




            </div>
        @endforeach



        <form action="http://127.0.0.1:8000/v1/evidencias" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="evidencia_url" placeholder="evidencia_url">
            <input type="datetime-local" name="fechaSubida" placeholder="fechaSubida">
            <input type="text" name="activity_id" value="{{ $data['id'] }}">


            <button type="submit">Guardar</button>
        </form>





    </div>
@endsection
