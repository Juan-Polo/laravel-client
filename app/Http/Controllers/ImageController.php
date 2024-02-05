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


    public function create()
    {
        return view('profile-image.create');
    }

    public function store(Request  $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/images', [
            'image_url' => $request->image_url,
            'user_id' => $request->user_id,
        ]);

        return $request->file('image_url')->store('');
        // return redirect()->route('images.index');
    }



    public function destroy($idImage)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/images/' . $idImage);
        return redirect()->route('users.index');
    }


    public function show($idImage)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/images/' . $idImage);
        $degree = $response->json();
        return view('images.show', compact('image'));
    }

    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url . '/images/' . $request->id, [
            'image_url' => $request->image_url,
            'user_id' => $request->user_id,

        ]);

        return redirect()->route('users.index');
    }
}
