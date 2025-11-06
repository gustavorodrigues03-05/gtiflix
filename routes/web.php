<?php
use App\Models\Ator;
use App\Models\Genero;
use App\Models\Nacionalidade;
use App\Models\Produtora;
use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function() {
    $filmes = Filme::all();
    return view('lista-filmes',
    compact('filmes'));
});

Route::get('/detalhes-filme/{filme}',
function(Filme $filme){
 return view('detalhes-filme', compact('filme'));
})->name('detalhes-filme');

Route::view('/login','login')->name('login');

Route::post('/logar', function (Request $request) {
    dd($request);
})->name('logar');