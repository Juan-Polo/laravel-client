@extends('layouts.plantilla')
@section('content')
    <a href="{{ route('asignaturas.guias', $data['id']) }}">
        <div class="guias">
            <p>Quias de refuerzo del </p>
            <p> grado {{ $data['name'] }} </p>
        </div>
    </a>




    <div class="contenedorActividades">








        <form class="FormAsignaturas" action="http://127.0.0.1:8000/v1/activities" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="fileAsignatura" type="file" name="actividad_url">
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
                    @if (isset($actividad['asignatura']['maestro']['user']['image']['image_url']))
                        <img src="{{ $urlBase . $actividad['asignatura']['maestro']['user']['image']['image_url'] }}"
                            alt="Imagen del maestro" style="width: 150px;height:150px">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt=""
                            style="width: 150px;height:150px">
                    @endif
                </div>

                <div>
                    <p> <strong style="color: blue">Titulo :</strong> {{ $actividad['titulo'] }}</p>
                    <p><strong style="color: blue">Descripcion :</strong>{{ $actividad['descripcion'] }}</p>
                    <p><strong style="color: blue">Fecha de inicio :</strong>{{ $actividad['fechaInicio'] }}</p>

                    <p><strong style="color: blue">Fecha de fin :</strong> {{ $actividad['fechaFin'] }}</p>
                </div>
                <div>



                    <a href=" {{ $urlBase . $actividad['actividad_url'] }} " download="{{ $actividad['titulo'] }}"><i
                            style="font-size: 50px;color:#f19721d0;" class="fa-solid fa-file-pdf"></i>
                    </a>

                </div>

                <div>

                    <button onclick="location.href= '{{ route('activities.show', $actividad['id']) }}'">Responder</button>

                </div>





            </div>
        @endforeach


    </div>
@endsection
