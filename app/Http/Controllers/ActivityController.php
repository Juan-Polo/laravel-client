<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ActivityController extends Controller
{

    // public function index()
    // {

    //     $url = env('URL_SERVER_API', 'http://127.0.0.1');
    //     $response = Http::get($url . '/activities');
    //     $data = $response->json();

    //     // dd($data);

    //     return view('degrees.show', compact('data'));
    // }





    public function store(Request  $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/activities', [
            'actividad_url' => $request->actividad_url,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fechaInicio' => $request->fechaInicio,
            'fechaFin' => $request->fechaFin,
            'asignatura_id' => $request->asignatura_id,

        ]);





        return redirect()->route('asignaturas.show', ['idAsignatura' => $request->asignatura_id]);

        // dd($data);
    }



    public function show($idActivity)
    {

        $urlBase = 'http://127.0.0.1:8000/';
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/activities/' . $idActivity);


        $data = $response->json();

        // dd($data);

        return view('activities.show', compact('data', 'urlBase'));
    }
}
