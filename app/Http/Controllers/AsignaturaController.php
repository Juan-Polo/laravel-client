<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class AsignaturaController extends Controller
{



    public function store(Request  $request)
    {



        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/asignaturas', [
            'name' => $request->name,
            'maestro_id' => $request->maestro_id,
            'degree_id' => $request->degree_id,

        ]);




        return redirect()->route('degrees.show', ['idDegree' => $request->degree_id]);
    }




    public function show($idAsignatura)
    {

        $urlBase = 'http://127.0.0.1:8000/';
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/asignaturas/' . $idAsignatura);


        $data = $response->json();

        // dd($data);

        return view('asignaturas.show', compact('data', 'urlBase'));
    }








    public function guias($idAsignatura)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/asignaturas/' . $idAsignatura);
        $data = $response->json();

        // dd($data);

        return view('guias.show', compact('data'));
    }
}
