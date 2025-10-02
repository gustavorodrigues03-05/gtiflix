<?php
use App\Models\Ator;
use App\Models\Genero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gustavo', function () {
    echo 'Olá Gustavo';
});

Route::get('/filmes/{filme}', function($filme) {
    echo 'Acessando dados do filme: '. $filme;
});

Route::view('/conheca', 'sobre');


Route::get('/generos', function() {
    $minhaVariavel = Genero::all();
    dd($minhaVariavel);
});


Route::get('/atores', function() {
    $minhaNovaVariavel = Ator::all();
    dd($minhaNovaVariavel);
});