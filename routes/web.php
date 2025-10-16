<?php
use App\Models\Ator;
use App\Models\Genero;
use App\Models\Nacionalidade;
use App\Models\Produtora;
use App\Models\Filme;
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

Route::get('/lista-filmes', function() {
    $filmes = Filme::all();
    return view('lista-filmes',
    compact('filmes'));
});
