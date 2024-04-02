@extends('layouts.plantilla')
@section('content')
    <div class="contenedor_guias">

        @foreach ($data['guias'] as $guias)
            <div>
                <p> {{ $guias['descripcion'] }} </p>
                <p> {{ $guias['Guia_url'] }} </p>
            </div>
        @endforeach

    </div>
@endsection
