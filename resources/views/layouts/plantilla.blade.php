<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    @vite(['resources/css/app.css', 'esources/js/app.js'])

</head>

<body>

    <div class="container">
        <header class="superior">
            <div class="logo">
                {{-- <a href="index.html"><img src="img/logo1.png" alt="" /></a> --}}
                <a href="index.html"><img src="{{ asset('img/logo1.png') }}" alt="" /></a>

            </div>
            <nav class="menu">
                <button onclick="location.href='index.html'">Inicio</button>
                <button onclick="location.href='grados.html'">Grados</button>
                <button onclick="location.href='foro.html'">Preguntas</button>

                <button onclick="location.href='contactenos.html'">
                    Contactenos
                </button>
            </nav>
            <div class="user">
                <a href="perfil.html"><img src="img/usuario.png" alt="" /></a>
            </div>
        </header>
        <div class="caja_buscar">
            <div class="busqueda">

                <input type="text" placeholder="Buscar" required>
                <div class="btn">
                    <i class="fas fa-search"></i>

                </div>

            </div>
        </div>

        <br><br>
        <div class="contenedor">
            <p>Bienvenido !!!</p>
            <div class="atras botones"> &#60 </div>
            <div class="adelante botones"> &#62 </div>
            <img src="img/c1.png" alt="" id="imagen">

        </div>

        <br><br><br>






        @yield('content')











        <footer class="pie">
            <div class="niña">
                <img src="img/pieniña.png" alt="">
            </div>
            <div class="content_footer">
                <p class="abajo">Our Little World</p>


                <ul>

                    <li><img src="icons/llamada-telefonica.png" alt="">Servicio al cliente: 01 8000-453-766</li>
                    <li><img src="icons/icons8-whatsapp-48.png" alt=""> 3107141132 - 3217437759</li>
                    <li><img src="icons/gmail.png" alt="">E-Mail jmtimana4@misena.edu.co</li>

                </ul>
                <ul>

                    <li> <img src="icons/mapa.png" alt="">Popayan - Colombia</li>
                    <li><img src="icons/reloj-de-pared.png" alt="">9:00 am a 6:00 p.m.</li>

                </ul>





            </div>
            <div class="niño">
                <img src="img/pieniño.png" alt="">
            </div>


        </footer>

    </div>


</body>

</html>
