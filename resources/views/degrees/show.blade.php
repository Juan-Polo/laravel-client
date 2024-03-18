@extends('layouts.plantilla')



@section('content')
    <script>
        function Mostrar_Chat() {
            document.getElementById("div_chat").style.display = "flex";
            document.getElementById("button_chat").style.backgroundColor = "white";
            document.getElementById("button_chat").style.border = "solid 2px #f19721";

            Ocultar_Asignaturas();
            // Ocultar_pdf();
            Ocultar_Horario();
        }

        function Ocultar_Chat() {
            document.getElementById("div_chat").style.display = "none";
            document.getElementById("button_chat").style.backgroundColor = "#f19721";
            document.getElementById("button_chat").style.border = "solid 2px black";
        }

        function Mostrar_Ocultar_Chat() {
            var div_chat = document.getElementById("div_chat");

            if (div_chat.style.display == "none") {
                Mostrar_Chat();
            } else {
                Ocultar_Chat();
            }
        }

        // Mostrar interfaz de tareas

        function Mostrar_Asignaturas() {
            document.getElementById("div_asignaturas").style.display = "flex";

            document.getElementById("button_asignaturas").style.backgroundColor = "white";
            document.getElementById("button_asignaturas").style.border = "solid 2px #f19721";

            Ocultar_Chat();
            // Ocultar_pdf();
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

        // Mostrar interfaz de pdf

        // function Mostrar_pdf() {
        //     document.getElementById("div_pdf").style.display = "flex";
        //     document.getElementById("button_pdf").style.backgroundColor = "white";

        //     document.getElementById("button_pdf").style.border = "solid 2px #f19721";

        //     Ocultar_Chat();
        //     Ocultar_Tareas();
        //     Ocultar_Horario();
        // }

        // function Ocultar_pdf() {
        //     document.getElementById("div_pdf").style.display = "none";
        //     document.getElementById("button_pdf").style.backgroundColor = "#f19721";
        //     document.getElementById("button_pdf").style.color = "black";
        //     document.getElementById("button_pdf").style.border = "solid 2px black";
        // }

        // function Mostrar_Ocultar_pdf() {
        //     var div_pdf = document.getElementById("div_pdf");

        //     if (div_pdf.style.display == "none") {
        //         Mostrar_pdf();
        //     } else {
        //         Ocultar_pdf();
        //     }
        // }

        // Mostrar interfaz de horario

        function Mostrar_Horario() {
            document.getElementById("div_horario").style.display = "flex";
            document.getElementById("button_horario").style.backgroundColor = "white";

            document.getElementById("button_horario").style.border = "solid 2px #f19721";

            Ocultar_Chat();
            Ocultar_Asignaturas();
            // Ocultar_pdf();
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
                <button id="button_chat" onclick="Mostrar_Ocultar_Chat()">
                    <img src="icons/chat.png" alt="" />
                </button>

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

        <div id="div_chat">
            <section>
                <div class="divpadre1">
                    <h3>Chat en linea</h3>
                    <div class="dmg">
                        <div class="vmg">
                            <div class="dimg">
                                <img src="img/ingles.jpeg" class="imgh" />
                                <div class="online"></div>
                            </div>
                            <small class="hora">ingles</small>
                        </div>
                        <div class="vmg">
                            <div class="dimg">
                                <img src="img/esp" class="imgh" />
                                <div class="offline"></div>
                            </div>
                            <small class="hora">español</small>
                        </div>
                        <div class="vmg">
                            <div class="dimg">
                                <img src="img/ingles.jpeg" class="imgh" />
                                <div class="online"></div>
                            </div>
                            <small class="hora">ingles</small>
                        </div>
                        <div class="vmg">
                            <div class="dimg">
                                <img src="img/esp" class="imgh" />
                                <div class="offline"></div>
                            </div>
                            <small class="hora">español</small>
                        </div>
                        <div class="vmg">
                            <div class="dimg">
                                <img src="img/ingles.jpeg" class="imgh" />
                                <div class="oline"></div>
                            </div>
                            <small class="hora">ingles</small>
                        </div>
                        <div class="vmg">
                            <div class="dimg">
                                <img src="img/esp" class="imgh" />
                                <div class="offline"></div>
                            </div>
                            <small class="hora">español</small>
                        </div>
                    </div>
                    <div class="divpadre2">
                        <div class="divc">
                            <img src="img/ingles.jpeg" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">ingles</p>
                                    <small class="horaa">10:33 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>

                        <div class="divc">
                            <img src="img/esp" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">español</p>
                                    <small class="horaa">10:20 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>
                        <div class="divc">
                            <img src="img/ingles.jpeg" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">ingles</p>
                                    <small class="horaa">10:33 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>
                        <div class="divc">
                            <img src="img/esp" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">español</p>
                                    <small class="horaa">10:20 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>
                        <div class="divc">
                            <img src="img/ingles.jpeg" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">ingles</p>
                                    <small class="horaa">10:33 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>
                        <div class="divc">
                            <img src="img/esp" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">español</p>
                                    <small class="horaa">10:20 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>
                        <div class="divc">
                            <img src="img/ingles.jpeg" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">ingles</p>
                                    <small class="horaa">10:33 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>
                        <div class="divc">
                            <img src="img/esp" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">español</p>
                                    <small class="horaa">10:20 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>

                        <div class="divc">
                            <img src="img/ingles.jpeg" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">ingles</p>
                                    <small class="horaa">10:33 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>

                        <div class="divc">
                            <img src="img/esp" class="mgh" />
                            <div class="dtext">
                                <div class="nfs">
                                    <p class="p1">español</p>
                                    <small class="horaa">10:20 am</small>
                                </div>
                                <small class="text1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Ullam fugiat id voluptatem sint tenetur ratione.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divde">
                    <div class="perfilc">
                        <div class="pnom">
                            <div class="pnom grow">
                                <div class="pimg">
                                    <img src="img/ingles.jpeg" class="mgh" />
                                </div>
                                <div class="pcenter">
                                    <p class="pp">Ingles</p>
                                    <small class="pp1">En Linea</small>
                                </div>
                            </div>
                            <div class="pnom">
                                <svg class="iconsp" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                                <svg class="iconsp" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="perfilc">
                        <div class="flexmb">
                            <img src="img/esp" class="imc" />
                            <div class="flex2">
                                <div class="textc">
                                    <p class="chatp">español</p>
                                    <small class="ctext">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Quidem, soluta reprehenderit? Dolor, fugit
                                        laboriosam inventore nisi animi doloribus consequatur
                                        debitis</small>
                                </div>
                                <small class="horaa">10:50 am</small>
                            </div>
                        </div>
                        <div class="flexm">
                            <img src="img/niño.avif" class="im" />
                            <div class="flex2">
                                <div class="textchat">
                                    <p class="chatp">manuel</p>
                                    <small class="ctext">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Quidem, soluta reprehenderit? Dolor, fugit
                                        laboriosam inventore nisi animi doloribus consequatur
                                        debitis</small>
                                </div>
                                <small class="hhoraa">10:51 am</small>
                            </div>
                        </div>
                        <div class="flexmb">
                            <img src="img/esp" class="imc" />
                            <div class="flex2">
                                <div class="textc">
                                    <p class="chatp">español</p>
                                    <small class="ctext">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Quidem, soluta reprehenderit? Dolor, fugit
                                        laboriosam inventore nisi animi doloribus consequatur
                                        debitis</small>
                                </div>
                                <small class="horaa">10:53 am</small>
                            </div>
                        </div>
                        <div class="flexm">
                            <img src="img/niño.avif" class="im" />
                            <div class="flex2">
                                <div class="textchat">
                                    <p class="chatp">Manuel</p>
                                    <small class="ctext">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Quidem, soluta reprehenderit? Dolor, fugit
                                        laboriosam inventore nisi animi doloribus consequatur
                                        debitis</small>
                                </div>
                                <small class="hhoraa">10:55 am</small>
                            </div>
                        </div>
                    </div>
                    <div class="divpadre3">
                        <input type="text" placeholder="Escribe tu mensaje..." class="inp" />

                        <svg class="iconsp" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                        </svg>
                        <svg class="iconsp" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>

                        <a href="" class="bnten">Enviar</a>
                    </div>
                </div>
            </section>
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

        {{-- <div id="div_pdf">
            <div class="izquierda">
                <h1>Matemáticas</h1>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Guía de Matemáticas para Primaria: Resuelve Problemas Divertidos
                        Una guía llena de ejercicios y actividades interactivas para que
                        los estudiantes de primaria practiquen matemáticas de manera
                        entretenida.
                    </p>
                    <a href="PDF/MT_Grado01_01.pdf" download="Guia Matemáticas">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Matemáticas para Niños: Aprende Jugando Esta guía combina juegos
                        y desafíos matemáticos para ayudar a los niños de primaria a
                        desarrollar sus habilidades numéricas de forma lúdica.
                    </p>
                    <a href="PDF/MT_Grado01_01.pdf" download="Guia Matemáticas">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Guía Práctica de Matemáticas para Grados Primarios Un recurso
                        educativo esencial que cubre temas fundamentales de matemáticas,
                        proporcionando ejemplos y ejercicios claros para un aprendizaje
                        efectivo.
                    </p>
                    <a href="PDF/MT_Grado01_01.pdf" download="Guia Matemáticas">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Matemáticas Simplificadas para Estudiantes de Primaria Una guía
                        concisa que presenta conceptos matemáticos de primaria de manera
                        accesible y fácil de entender, con ejemplos prácticos para
                        reforzar el aprendizaje.
                    </p>
                    <a href="PDF/MT_Grado01_01.pdf" download="Guia Matemáticas">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>
            </div>

            <div class="medio">
                <h1>Español</h1>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Guía de Español para Primaria: Aprende a Leer y Escribir Esta
                        guía ayuda a los estudiantes de primaria a desarrollar
                        habilidades fundamentales en lectura y escritura, con ejercicios
                        y actividades diseñados para fortalecer su dominio del idioma
                        español.
                    </p>
                    <a href="PDF/grado-2-espanol-portada.pdf" download="Guia Español">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Español Divertido: Actividades para Primaria Una guía llena de
                        actividades y juegos interactivos que hacen que aprender español
                        sea una experiencia alegre y efectiva para los niños de
                        primaria.
                    </p>
                    <a href="PDF/grado-2-espanol-portada.pdf" download="Guia Español">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Un recurso esencial que aborda temas de gramática y ortografía
                        de manera clara y concisa, proporcionando ejemplos y ejercicios
                        para mejorar las habilidades lingüísticas de los estudiantes.
                    </p>
                    <a href="PDF/grado-2-espanol-portada.pdf" download="Guia Español">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Español para Niños: Comunicación Efectiva Esta guía se enfoca en
                        mejorar las habilidades de comunicación en español para
                        estudiantes de primaria, con ejemplos y ejercicios que fomentan
                        la expresión oral y escrita de forma efectiva.
                    </p>
                    <a href="PDF/grado-2-espanol-portada.pdf" download="Guia Español">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>
            </div>

            <div class="derecha">
                <h1>Ciencias naturales</h1>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Guía de Ciencias Naturales para Primaria: Explora el Mundo
                        Natural Una guía que introduce a los estudiantes de primaria en
                        el fascinante mundo de las ciencias naturales, con actividades y
                        experimentos para descubrir la biodiversidad y los fenómenos
                        naturales.
                    </p>
                    <a href="PDF/grado-2-espanol-portada.pdf" download="Guia Español">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Ciencias Naturales al Alcance de los Niños Una guía didáctica
                        que simplifica los conceptos científicos para los estudiantes de
                        primaria, con ejemplos y experimentos prácticos que fomentan la
                        curiosidad.
                    </p>
                    <a href="PDF/grado-2-espanol-portada.pdf" download="Guia Español">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Descubre la Naturaleza: Esta guía ofrece una inmersión en los
                        principios básicos de las ciencias naturales, ayudando a los
                        niños de primaria a explorar la vida, la tierra y el universo de
                        manera accesible.
                    </p>
                    <a href="PDF/grado-2-espanol-portada.pdf" download="Guia Español">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>

                <div class="contenedor_pdf">
                    <h3>Descripcion:</h3>
                    <p>
                        Aprende Ciencias Naturales: Desde la Ecología hasta la
                        Astronomía Una guía completa que abarca una amplia gama de temas
                        de ciencias naturales, desde ecología y biología hasta
                        astronomía, brindando a los estudiantes de primaria una visión
                        completa del mundo natural que les rodea.
                    </p>
                    <a href="PDF/grado-2-espanol-portada.pdf" download="Guia Español">
                        <img src="icons/icons8-pdf-64.png" alt=""
                            style="
                height: 70px;
                width: 70px;
                border: 0;
                margin-bottom: 0;
              " /></a>
                </div>
            </div>
        </div> --}}

        <div id="div_horario">
            <h1>Horario - Primero</h1>

            <img src="img/horario.jpg" alt="" />

            <a href="img/horario.jpg" download="Horarios Primaria">
                <img src="icons/descarga.png" alt=""
                    style="height: 70px; width: 70px; border: 0; margin-bottom: 0" />Descargar</a>
        </div>
    </div>
@endsection
