@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')

    <div class="ejemM">
        <img class="imgderechaM" src="{{ asset('./img/misionderecha.jpg') }}" />
        <img class="imgizquierdaM" src="{{ asset('./img/misionizquierda.jpg') }}" />
        <div class="mision">
            <h2>MISIÓN</h2>
            Brindar una herramienta a la maestra donde pueda publicar actividades
            que los alumnos de los grados de primaria deban realizar, eventos
            escolares y temas de refuerzo, ayudando de esta forma con el
            aprendizaje de los niños y la interacción entre padre o adulto.
        </div>
    </div>

@endsection
