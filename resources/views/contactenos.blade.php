@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')





    <form action="datos.php" method="post">
        <div class="form">
            <table class="table1">

                <tr>
                    <td>


                        <img style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"
                            src="{{ asset('/img/AnimatedShape.svg') }}" alt="">
                        Nombre: <input type="text" name="Nombre" /><br />
                        Correo Electronico:<input type="text" name="Gmail" /><br />
                        Celular:<input type="number" name="Celular" /><br />
                        Asunto:<input type="text" name="Asunto" /><br />
                        Mensaje:
                        <input type="text" class="mensaje" name="Mensaje" /><br />

                        <input type="submit" class="enviar" name="Enviar" />
                    </td>
                </tr>
            </table>
            <div class="ubicacion">
                <div class="formniños"> <img style="border-radius:50px" src="{{ asset('/img/formniños.jpg') }}"
                        alt="">
                </div>
                <div class="iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d996.5341384982306!2d-76.64051538071!3d2.461628915882347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1690229187072!5m2!1ses!2sco"
                        width="600" height="450" style="border: solid 2px rgb(16, 0, 245); border-radius: 20px"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </form>






@endsection
