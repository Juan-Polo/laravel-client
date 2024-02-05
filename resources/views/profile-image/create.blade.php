@extends('layouts.plantilla')

@section('title', 'Image')


@section('content')
    <h1>Image de perfil</h1>

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <label for="image_url">Image <br> <input type="file" name="image_url" accept="image/*"> </label>
        <br>
        <label for="user_id">Role <br> <input type="text" name="user_id"> </label>
        <br>

        <button type="submit"> Subir imagen </button>



    </form>





@endsection
