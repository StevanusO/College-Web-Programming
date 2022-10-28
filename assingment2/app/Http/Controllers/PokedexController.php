<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index()
    {
        $pokedexs = Pokedex::all();

        return view('home', compact('pokedexs'));
    }
}
