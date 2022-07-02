<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function search(Request $request)
    {
        $url = "http://pokeapi.co/api/v2/pokemon/" . $request->name;
        $response =Http::get($url);
        $newsData = $response->json();
        $id = $newsData['id'];
        $name = $newsData['name'];
        $pokemon_type = $newsData['types'];
        $url_img = $newsData['sprites']['front_default'];
        return view('form', ['id' =>$id, 'name'=>$name, 'pokemon_type' =>$pokemon_type, 'url_img' =>$url_img]);
    }
}
