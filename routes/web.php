<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $ur = Http::get('https://api.binance.com/api/v3/ticker/24hr');
     $pokemons = $ur->json();

  //  $ur = Http::get('https://www.canalti.com.br/api/pokemons.json');
  //  $pokemons = $ur->json();

   // dd($pokemons);
   return view('welcome', compact('pokemons'));
});


