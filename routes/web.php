<?php

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

// homepage 
Route::get('/', function () {
    // ricavo l'array dei fumetti dalla cartella config
    $comics_array = config('comics');

    // assegno alla variabile data l'array dei fumetti e la passo alla view
    $data = [
        'comics' => $comics_array
    ];
    
    return view('home', $data);
})->name('home');

// pagina dettagli fumetto 
Route::get('/comic/{id}', function ($id) {
    // ricavo l'array dei fumetti dalla cartella config
    $comics_array = config('comics');
    
    // dichiaro un array vuoto dove inserirò il singolo fumetto 
    $comic = [];
    foreach($comics_array as $item) {

        // se l'id del singolo fumetto corrisponde all'id che cerchiamo, l'array sarà popolato con il singolo fumetto
        if($item['id'] == $id) {
            $comic = $item;
        }
    }

    // assegno alla variabile data il singolo fumetto trovato 
    $data = [
        'comic' => $comic
    ];
    
    return view('comic', $data);
})->name('comic');