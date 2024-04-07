@extends('layouts.plantilla')

@section('title', 'Users')


@section('content')




    <div class="subir">

        <div>
            <form action=" http://127.0.0.1:8000/v1/upload " method="POST" enctype="multipart/form-data">

                @csrf
                <label class="file-label"> subir<i class="fa-solid fa-cloud-arrow-up"
                        style="color: #f19721;  font-size:40px;margin-top:10px"></i> <input id="horario_url" class="file"
                        type="file" name="image_url" accept="image/*"></label>

                <input type="hidden" name="user_id" value="{{ $user['id'] }}">



                <button type="submit"> Subir imagen </button>



            </form>


        </div>

        <div>
            <form action="http://127.0.0.1:8000/v1/update-image/{{ $user['image'] ? $user['image']['id'] : 'null' }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT"> <!-- Método para simular PUT -->

                <label class="file-label"> subir<i class="fa-solid fa-pen-to-square"
                        style="color:#f19721; font-size:40px;margin-top:10px "></i> <input id="horario_url" class="file"
                        type="file" name="image_url" accept="image/*"></label>



                <input type="hidden" name="user_id" value="{{ $user['id'] }}">


                </label>


                <button type="submit">Actualizar Imagen</button>
            </form>
        </div>


    </div>

    <div class="perfil">




        <div class="foto_perfil">
            <div class="foto">
                @if (isset($user['image']['image_url']))
                    <img src="{{ $urlBase . $user['image']['image_url'] }}" alt="">
                @else
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="">
                @endif
            </div>



            <div class="text-perfil">
                <p>
                    <span>Nombre:</span> {{ $user['name'] }} {{ $user['lastname'] }} <br /><br />
                    <span>Rol: </span>{{ $user['role']['name'] }}
                </p>

                <p>

                    <span>Correo:</span> {{ $user['email'] }}


                </p>
            </div>




        </div>



    </div>


@endsection
