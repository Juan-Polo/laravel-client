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
        return view('degrees.index', compact('data'));
    }


    public function create()
    {
        return view('degrees.create');
    }

    public function store(Request  $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/degrees', [
            'nombre' => $request->nombre,
            'jornada' => $request->jornada,
            'numeroAlumnos' => $request->numeroAlumnos,

        ]);

        return redirect()->route('degrees.index');
    }



    public function destroy($idDegree)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/degrees/' . $idDegree);
        return redirect()->route('degrees.index');
    }


    public function show($idDegree)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/degrees/' . $idDegree);
        $degree = $response->json();
        return view('degrees.show', compact('degree'));
    }

    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url . '/degrees/' . $request->id, [
            'nombre' => $request->nombre,
            'jornada' => $request->jornada,
            'numeroAlumnos' => $request->numeroAlumnos,

        ]);

        return redirect()->route('degrees.index');
    }
}
