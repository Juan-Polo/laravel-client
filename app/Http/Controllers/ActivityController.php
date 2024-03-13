<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index()
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/activities');
        $data = $response->json();

        // dd($data);

        return view('degrees.show', compact('data'));
    }
}
