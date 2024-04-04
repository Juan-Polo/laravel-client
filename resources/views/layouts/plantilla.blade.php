<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/login.css', 'resources/css/stylechat.css', 'resources/css/pdf.css', 'resources/css/tareas_class.css', 'resources/css/app.css', 'resources/css/table-index.css', 'resources/css/perfil.css', 'resources/css/grados.css', 'resources/css/forms.css', 'resources/css/interfaz_grado.css', 'resources/css/asignaturas.css', 'resources/js/app.js', 'resources/js/forms.js', 'resources/js/mostrar_contenido.js', 'resources/js/login.js'])

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







        <div class="contenido">

            @yield('content')




        </div>







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
