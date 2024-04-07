<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DegreeController extends Controller
{


    public function index()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/degrees');
        $data = $response->json();

        $editing = null;

        $imagesResponse  = Http::get($url . '/getImages');
        $imagesData = $imagesResponse->json();




        return view('degrees.index', compact('data', 'imagesData', 'editing'));
    }


    public function create()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/getImages');
        $data = $response->json();


        // dd($data);
        return view('degrees.create', compact('data'));
    }

    public function store(Request  $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/degrees', [
            'name' => $request->name,
            'school_day' => $request->school_day,
            'students' => $request->students,
            'image' => $request->image,

        ]);




        return redirect()->route('degrees.index');
    }



    public function edit(Request $request, $id)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/degrees/' . $id);
        $data = $response->json();


        $response = Http::get($url . '/getImages');
        $images = $response->json();

        // dd($data, $images);
        return view('degrees.edit', compact('data', 'images'));
    }



    public function destroy($idDegree)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/degrees/' . $idDegree);
        return redirect()->route('degrees.index');
    }


    public function show($idDegree)
    {

        $urlBase = 'http://127.0.0.1:8000/';

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/degrees/' . $idDegree);
        $data = $response->json();

        // dd($data);
        return view('degrees.show', compact('data', 'urlBase'));
    }

    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url . '/degrees/' . $request->id, [
            'name' => $request->name,
            'school_day' => $request->school_day,
            'students' => $request->students,
            'image' => $request->image,


        ]);

        return redirect()->route('degrees.index');
    }
}
