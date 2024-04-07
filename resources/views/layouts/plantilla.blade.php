<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link
        href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css"
        rel="stylesheet">



    @vite(['resources/css/contactenos.css', 'resources/css/mision_vision.css', 'resources/css/pre-fre.css', 'resources/css/carrousel.css', 'resources/css/login.css', 'resources/css/stylechat.css', 'resources/css/pdf.css', 'resources/css/tareas_class.css', 'resources/css/app.css', 'resources/css/table-index.css', 'resources/css/perfil.css', 'resources/css/grados.css', 'resources/css/forms.css', 'resources/css/interfaz_grado.css', 'resources/css/asignaturas.css', 'resources/js/app.js', 'resources/js/forms.js', 'resources/js/mostrar_contenido.js', 'resources/js/login.js', 'resources/js/carrousel.js', 'resources/js/pre-fre.js'])
    <link rel="icon" href="{{ asset('img/logo1.png') }}" type="image/x-icon">
</head>

<body>

    <script>
        function Mostrar_menu() {
            document.getElementById("div-menu").style.display = "flex";
            document.getElementById("div-menu").style.flexDirection = "column";
        }

        function Ocultar_menu() {
            document.getElementById("div-menu").style.display = "none";

        }

        function Mostrar_Ocultar_menu() {
            var div_menu = document.getElementById("div-menu");

            if (div_menu.style.display == "none") {
                Mostrar_menu();
            } else {
                Ocultar_menu();
            }
        }
    </script>
    <button class="cat"> <img class="gatoimg" src=  "{{ asset('./img/cat.png') }}">



        <ul class="desplegable gato-u">
            <li class="catt gato-l"><a href="{{ route('users.mision') }}">Misión</a></li>
            <li class="catt gato-l "><a href="{{ route('users.vision') }}">Visión</a></li>
        </ul>

    </button>

    <div class="redes">

        <a href="https://www.facebook.com/"><img src="{{ asset('./icons/facebook.png') }}" alt=""></a>
        <a href="https://www.instagram.com/"><img src="{{ asset('./icons/instagram.png') }}" alt=""></a>
        <a href="https://twitter.com/"><!--<img src="icons/twitter.png" alt="">--> <svg viewBox="0 0 24 24"
                aria-hidden="true"
                style="background-color: rgb(255, 255, 255) ; border-radius: 10px; border:solid 2px; "
                class="r-k200y  r-1nao33i r-4qtqp9 r-yyyyoo r-5sfk15 r-dnmrzs r-kzbkwu r-bnwqim r-1plcrui r-lrvibr">
                <g>
                    <path
                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                    </path>
                </g>
            </svg></a>


    </div>







    <div class="menu_padre">
        <div class="container">
            <header class="superior">
                <div class="logo">
                    <a href="{{ route('users.home') }}"><img src="{{ asset('/img/logo1.png') }}" alt="" /></a>
                </div>
                <nav class="menu">
                    <button class="btn-res" onclick="Mostrar_Ocultar_menu()">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div id="div-menu">

                        <button class="btn-menu" onclick="location.href='{{ route('users.home') }}'">Inicio</button>
                        <button class="btn-menu" onclick="location.href='{{ route('degrees.index') }}'">Grados</button>
                        <button class="btn-menu"
                            onclick="location.href='{{ route('users.preguntas') }}'">Preguntas</button>

                        <button class="btn-menu"
                            onclick="location.href='{{ route('users.contactenos') }}'">Contactenos</button>
                    </div>
                </nav>
                <div class="user">
                    <a href="{{ route('users.index') }}"><img src="{{ asset('img/usuario.png') }}"
                            alt="" /></a>
                </div>
            </header>
        </div>

        <div class="caja_buscar">
            <div class="busqueda">

                <input type="text" placeholder="Buscar" required>
                <div class="btn">
                    <i class="fas fa-search"></i>

                </div>

            </div>
        </div>


        <div class="container">

            @yield('content')




        </div>


        <footer class="pie">
            <div class="niña">
                <img src="{{ asset('img/pieniña.png') }}" alt="">
            </div>
            <div class="content_footer">
                <p class="abajo">Our Little World</p>


                <ul class="fuu-u">

                    <li class="fuu-l"><img src=" {{ asset('icons/llamada-telefonica.png') }} " alt="">Servicio
                        al cliente: 01
                        8000-453-766</li>
                    <li class="fuu-l"><img src=" {{ asset('icons/icons8-whatsapp-48.png') }}" alt="">
                        3107141132 - 3217437759
                    </li>
                    <li class="fuu-l"><img src=" {{ asset('icons/gmail.png') }}" alt="">E-Mail
                        jmtimana4@misena.edu.co</li>

                </ul>
                <ul class="fuu-u">

                    <li class="fuu-l"> <img src=" {{ asset('icons/mapa.png') }}" alt="">Popayan - Colombia
                    </li>
                    <li class="fuu-l"><img src="{{ asset('icons/reloj-de-pared.png') }}" alt="">9:00 am a 6:00
                        p.m.</li>

                </ul>





            </div>
            <div class="niño">
                <img src="{{ asset('img/pieniño.png') }}" alt="">
            </div>


        </footer>

    </div>





</body>

</html>
