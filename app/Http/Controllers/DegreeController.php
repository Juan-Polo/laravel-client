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



        $imagesResponse  = Http::get($url . '/getImages');
        $imagesData = $imagesResponse->json();




        return view('degrees.index', compact('data', 'imagesData'));
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
            'name' => $request->name,
            'school_day' => $request->school_day,
            'students' => $request->students,

        ]);

        return redirect()->route('degrees.index');
    }
}
