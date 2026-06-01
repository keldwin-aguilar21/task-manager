<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiDemoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://swapi.info/api/people');
        $characters = $response->json();
        return view('starwars', compact('characters'));
    }
}
