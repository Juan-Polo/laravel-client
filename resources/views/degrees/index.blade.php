@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')





    <div class="grados">



        @foreach ($data as $degree)
            <div>
                <a class="a-content" href="{{ route('degrees.show', $degree['id']) }}">



                    <img src=" {{ $degree['image'] }} " alt="" />

                    <hr />
                    <p style="overflow: hidden;;
                    ">Nombre: {{ $degree['name'] }}</p>
                    <p style="overflow: hidden;;
                    ">Clase: {{ $degree['school_day'] }}</p>
                    <p>Estudiantes: {{ $degree['students'] }}</p>




                </a>
                <div class="delete-edit">
                    <a href="{{ route('degrees.destroy', $degree['id']) }}"><i class="fa-solid fa-trash"
                            style="color: #ff0000; font-size:30px"></i></a>



                    <a href="{{ route('degrees.edit', $degree['id']) }}"> <i class="fa-solid fa-pen-to-square"
                            style="color: #f19721; font-size
                            :30px"></i></a>
                </div>

            </div>
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

            <h1>Escoge Una Imagen</h1>



            <div>


                @foreach ($imagesData['images'] as $image)
                    <label>
                        <input class="input-image" type="radio" name="image" value="{{ $image }}">
                        <img src="{{ $image }}" alt="Imagen" style="width: 200px; height:200px">
                    </label>
                @endforeach


            </div>


            <button class="btnCrear" type="submit"> Crear </button>

            <button type="button" id="btnCerrarFormulario"><i class="fa-solid fa-circle-xmark"
                    style="color: red; font-size:50px"></i></button> <!-- Botón de cerrar -->



        </form>
    </div>



@endsection
