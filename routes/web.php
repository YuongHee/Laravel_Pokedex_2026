<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pokemon;


Route::get('/pokemons', function() {

    $pokemons = Pokemon::all();

    return view('pokemon', [
        'pokemons' => $pokemons
    ]);
});