@extends('layouts.plantilla')
@section('content')
    <div class="contenedorActividades">





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







        @foreach ($data['activities'] as $actividad)
            <div class="actividad">

                <div>
                    @if (isset($actividad['maestro']['user']['image']['image_url']))
                        <img src="{{ $urlBase . $actividad['maestro']['user']['image']['image_url'] }}"
                            alt="Imagen del maestro" style="width: 150px;height:150px">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt=""
                            style="width: 150px;height:150px">
                    @endif
                </div>

                <div>
                    <p> <strong>Titulo :</strong> {{ $actividad['titulo'] }}</p>
                    <p><strong>descripcion :</strong>{{ $actividad['descripcion'] }}</p>
                    <p><strong>Fecha de inicio :</strong>{{ $actividad['fechaInicio'] }}</p>

                    <p><strong>Fecha de fin :</strong> {{ $actividad['fechaFin'] }}</p>
                </div>
                <div>

                    {{-- <iframe src="{{ $urlBase . $actividad['actividad_url'] }}" style="width:100%; height:400px;"></iframe>
                     --}}

                    <a href=" {{ $urlBase . $actividad['actividad_url'] }} " download="{{ $actividad['titulo'] }}"><i
                            style="font-size: 50px" class="fa-solid fa-file-pdf"></i> </a>

                </div>

                <div>
                    '
                    <button onclick="location.href= '{{ route('activities.show', $actividad['id']) }}'">Responder</button>

                </div>





            </div>
        @endforeach


    </div>
@endsection
