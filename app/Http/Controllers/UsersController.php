<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;




class UsersController extends Controller
{

    public function index()
    {
        $urlBase = 'http://127.0.0.1:8000/';
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/users');
        $data = $response->json();




        // dd($data);
        return view('users.index', compact('data', 'urlBase'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/roles');
        $roles = $response->json();


        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/users', [
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role_id,
        ]);
        return redirect()->route('users.index');
    }




    public function destroy($idUser)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/users/' . $idUser);
        return redirect()->route('users.index');
    }



    public function show($idUser)
    {
        $urlBase = 'http://127.0.0.1:8000/';
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/users/' . $idUser);
        $user = $response->json();




        return view('users.show', compact('user', 'urlBase'));
    }


    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url . '/users/' . $request->id, [
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role_id,
        ]);


        return redirect()->route('users.index');
    }
}
