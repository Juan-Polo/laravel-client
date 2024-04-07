@extends('layouts.plantilla')



@section('content')
    <script>
        // Mostrar interfaz de tareas

        function Mostrar_Asignaturas() {
            document.getElementById("div_asignaturas").style.display = "flex";

            document.getElementById("button_asignaturas").style.backgroundColor = "white";
            document.getElementById("button_asignaturas").style.border = "solid 2px #f19721";


            Ocultar_Horario();
        }

        function Ocultar_Asignaturas() {
            document.getElementById("div_asignaturas").style.display = "none";
            document.getElementById("button_asignaturas").style.backgroundColor = "#f19721";
            document.getElementById("button_asignaturas").style.border = "solid 2px black";
        }

        function Mostrar_Ocultar_Asignaturas() {
            var div_asignaturas = document.getElementById("div_asignaturas");

            if (div_asignaturas.style.display == "none") {
                Mostrar_Asignaturas();
            } else {
                Ocultar_Asignaturas();
            }
        }


        function Mostrar_Horario() {
            document.getElementById("div_horario").style.display = "flex";
            document.getElementById("button_horario").style.backgroundColor = "white";

            document.getElementById("button_horario").style.border = "solid 2px #f19721";


            Ocultar_Asignaturas();

        }

        function Ocultar_Horario() {
            document.getElementById("div_horario").style.display = "none";
            document.getElementById("button_horario").style.backgroundColor = "#f19721";
            document.getElementById("button_horario").style.border = "solid 2px black";
        }

        function Mostrar_Ocultar_Horario() {
            var div_horario = document.getElementById("div_horario");

            if (div_horario.style.display == "none") {
                Mostrar_Horario();
            } else {
                Ocultar_Horario();
            }
        }
    </script>


    <div class="contenedor_total">
        <div class="interfaz_grado">
            <div class="botones_grado">


                <button id="button_asignaturas" onclick="Mostrar_Ocultar_Asignaturas()">
                    <img src="icons/tareas.png" alt="" />
                </button>
                {{-- 
                <button id="button_pdf" onclick="Mostrar_Ocultar_pdf();">
                    <img src="icons/icons8-pdf-64.png" alt="" />
                </button> --}}

                <button id="button_horario" onclick="Mostrar_Ocultar_Horario()">
                    <img src="icons/horario-de-trabajo.png" alt="" />
                </button>
            </div>
        </div>



        <div id="div_asignaturas">
            <h1>Asignaturas</h1>

            <div id="contenedor_asignaturas">

                @foreach ($data['degree']['asignaturas'] as $asignaturas)
                    <a href="{{ route('asignaturas.show', $asignaturas['id']) }}">

                        <div class="asignaturas">
                            <h2> {{ $asignaturas['name'] }} </h2>
                            <div>
                                <p> Maestro:
                                    {{ $asignaturas['maestro']['user']['name'] . ' ' . $asignaturas['maestro']['user']['lastname'] }}
                                </p>
                                <p>Email: {{ $asignaturas['maestro']['user']['email'] }} </p>

                            </div>
                        </div>
                    </a>
                @endforeach


            </div>


            <div><button id="btnMostrarFormularioAsignatura">agregar Asignatura</button></div>
            <div id="DivFormAsignaturas">
                <form action="{{ route('asignaturas.store') }}" method="POST" enctype="multipart/form-data"
                    id="formularioDegrees">

                    @csrf
                    <input type="text" name="name" placeholder="Asignatura ">
                    <br>

                    <select name="maestro_id">
                        @foreach ($data['maestros'] as $maestro)
                            <option value="{{ $maestro['id'] }}">
                                {{ $maestro['user']['name'] . ' ' . $maestro['user']['lastname'] }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" name="maestro_id" placeholder="Escoge el maestro "> --}}

                    <br><br>
                    <label>Grado: {{ $data['degree']['name'] }}</label>
                    <input type="hidden" name="degree_id" value="{{ $data['degree']['id'] }}">


                    <br><br>

                    <button type="submit" class="btnCrearAsignatura"> Crear </button>

                    <!-- Botón de cerrar -->

                    <button type="button" id="btnCerrarFormularioAsignaturas"><i class="fa-solid fa-circle-xmark"
                            style="color: red; font-size:50px"></i></button>

                </form>
            </div>

        </div>


        <div id="div_horario">
            <h1>Horario - Primero</h1>






            @if (isset($data['degree']['horario']['horario_url']))
                <img src="{{ $urlBase . $data['degree']['horario']['horario_url'] }}" alt="Imagen" style="width: 900px">
            @else
                <img src="https://i.pinimg.com/originals/65/10/b4/6510b45128f161b9a75aa67909777181.jpg" alt=""
                    style="width: 900px">
            @endif

            <div>
                @if (isset($data['degree']['horario']['horario_url']))
                    <a href="{{ $urlBase . $data['degree']['horario']['horario_url'] }}" download="nombre_de_archivo.png"
                        target="_blank">
                    @else
                        <a href="https://i.pinimg.com/originals/65/10/b4/6510b45128f161b9a75aa67909777181.jpg"
                            download="default_image.png" target="_blank">
                @endif


                Descargar
                <i class="fa-solid fa-cloud-arrow-down" style="color: #f19721; font-size:40px;margin-top:10px"></i></a>

                <form action="http://127.0.0.1:8000/v1/horarios" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="horario_url" class="file-label"> subir<i class="fa-solid fa-cloud-arrow-up"
                            style="color: #f19721;  font-size:40px;margin-top:10px"></i> <input id="horario_url"
                            class="file" type="file" name="horario_url" accept="image/*"></label>


                    <input type="hidden" name="degree_id" value="{{ $data['degree']['id'] }}">
                    <button type="submit">Guardar</button>
                </form>
            </div>

        </div>





    </div>
@endsection
