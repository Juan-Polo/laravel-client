<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ImageController extends Controller
{





    public function index()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/images');


        $data = $response->json();
        return view('profile-image.index', compact('data'));
    }



    public function destroy($idImage)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/images/' . $idImage);
        return redirect()->route('users.index');
    }


    // public function show($idImage)
    // {
    //     $url = env('URL_SERVER_API', 'http://127.0.0.1');
    //     $response = Http::get($url . '/images/' . $idImage);
    //     $image = $response->json();
    //     return view('images.show', compact('image'));
    // }

    // public function update(Request $request)
    // {
    //     $url = env('URL_SERVER_API', 'http://127.0.0.1');
    //     $response = Http::put($url . '/update-image/' . $request->id, [
    //         'image_url' => $request->image_url,
    //         'user_id' => $request->user_id,

    //     ]);

    //     return $response;
    // }


    public function edit($id)

    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/edit-image/' . $id);
        $data = $response->json();

        return view('profile-image.edit', compact('data'));
    }



    // public function updateImage(Request $request, $id)
    // {
    //     // Validar la solicitud y asegurarse de que se haya enviado una imagen
    //     $request->validate([
    //         'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las reglas de validación según tus necesidades
    //     ]);

    //     // Obtener la imagen del campo 'image_url' del formulario
    //     $image = $request->file('image_url');

    //     // dd($image);

    //     // Construir la solicitud para enviar la imagen al endpoint de la API
    //     $response = Http::withHeaders([
    //         'Accept' => 'application/json',
    //     ])->attach('image_url', $image, $image->getClientOriginalName())
    //         ->put('http://127.0.0.1:8000/v1/update-image/' . $id);


    //     // Verificar si la solicitud fue exitosa y procesar la respuesta
    //     if ($response->successful()) {
    //         // La imagen se actualizó correctamente en la API
    //         return $response->json();
    //     } else {
    //         // Hubo un error al actualizar la imagen en la API
    //         return "Error al actualizar la imagen en la API";
    //     }
    // }
}
