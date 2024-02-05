@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')

    <h1> Grados </h1>


    <div class="contenido-cards">
        @foreach ($data as $degree)
            <div class="card">

                <section><img src="https://img.freepik.com/foto-gratis/leon-melena-arcoiris-ojos-azules_1340-39421.jpg"
                        alt=""></section>
                <div class="info">




                    <section>Nombre: {{ $degree['name'] }}</section>

                    <section> Jornada: {{ $degree['school_day'] }}</section>

                    <section> Numero de estudiantes: {{ $degree['students'] }}</section>

                    <section> <a href="{{ route('degrees.show', $degree['id']) }}">Ver</a> <a
                            href="{{ route('degrees.destroy', $degree['id']) }}">Eliminar</a></section>

                </div>
            </div>
        @endforeach

    </div>




@endsection
