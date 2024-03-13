@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')

    {{-- <h1> Grados </h1>


    <div class="contenido-cards">
        @foreach ($data as $degree)
            <div class="card">

                <section> <img src="{{ asset($degree['image']) }}" alt=""> </section>
                <div class="info">




                    <section>Nombre: {{ $degree['name'] }}</section>

                    <section> Jornada: {{ $degree['school_day'] }}</section>

                    <section> Numero de estudiantes: {{ $degree['students'] }}</section>

                    <section> <a href="{{ route('degrees.show', $degree['id']) }}">Ver</a> <a
                            href="{{ route('degrees.destroy', $degree['id']) }}">Eliminar</a></section>

                </div>
            </div>
        @endforeach

    </div> --}}



    <div class="grados">



        @foreach ($data as $degree)
            <a href="{{ route('degrees.show', $degree['id']) }}">
                <div>


                    <img src=" {{ $degree['image'] }} " alt="" />

                    <hr />
                    <p style="overflow: hidden;;
                    ">Nombre: {{ $degree['name'] }}</p>
                    <p style="overflow: hidden;;
                    ">Clase: {{ $degree['school_day'] }}</p>
                    <p>Estudiantes: {{ $degree['students'] }}</p>


                </div>
            </a>
        @endforeach


    </div>





    <button id="btnMostrarFormulario">agregar grado <img src=" {{ asset('img/añadir.png') }} " alt=""></button>



    <div id="DivformularioDegrees">

        <h1>Crea Un Grado</h1>

        <form action="{{ route('degrees.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <input type="text" name="name" placeholder="Nombre" />

            <input type="text" name="school_day" placeholder="Jornada">

            <input type="number" name="students" placeholder="Numero de alumnos ">

            <h1>Ecoje Una Imagen</h1>



            <div>


                @foreach ($imagesData['images'] as $image)
                    <label>
                        <input class="input-image" type="radio" name="image" value="{{ $image }}">
                        <img src="{{ $image }}" alt="Imagen" style="width: 200px">
                    </label>
                @endforeach


            </div>


            <button class="btnCrear" type="submit"> Crear </button>

            <button type="button" id="btnCerrarFormulario"><i class="fa-solid fa-circle-xmark"
                    style="color: red; font-size:50px"></i></button> <!-- Botón de cerrar -->



        </form>
    </div>



@endsection
