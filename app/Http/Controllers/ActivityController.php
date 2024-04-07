<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ActivityController extends Controller
{





    public function show($idActivity)
    {

        $urlBase = 'http://127.0.0.1:8000/';
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/activities/' . $idActivity);


        $data = $response->json();



        return view('activities.show', compact('data', 'urlBase'));
    }
}
