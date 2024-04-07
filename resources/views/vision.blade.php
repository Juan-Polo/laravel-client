@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')

    <div class="ejemV">
        <img class="imgderechaV" src="  {{ asset('./img/visionderecha.jpg') }}" />
        <img class="imgizquierdaV" src="{{ asset('./img/visionizquierda.jpg') }}" />
        <div class="vision">
            <h2>VISIÓN</h2>
            Para el año 2026 nuestro aplicativo web y móvil cumplirá con el
            objetivo general y con los objetivos específicos que planteamos. Por
            esta misma razón nuestro software (SW) no tendrá ningún percance o
            problema, y si por algún motivo esto llegara a ocurrir nuestro equipo
            de trabajo estará dispuesto a brindar una solución de calidad, para de
            esta forma cumplir con el desarrollo del aplicativo web y móvil.
        </div>
    </div>

@endsection
