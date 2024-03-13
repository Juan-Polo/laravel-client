@extends('layouts.plantilla')

@section('title', 'Image')


@section('content')
    <h1>Image de perfil</h1>

    <form action=" http://127.0.0.1:8000/v1/upload " method="POST" enctype="multipart/form-data">

        @csrf
        <label for="image_url">Image <br> <input accept="image/*" type="file" name="image_url"></label>
        <br>
        <label for="user_id">User <br> <input type="text" name="user_id"  value="" > </label>
        <br>

        <button type="submit"> Subir imagen </button>



    </form>





@endsection
