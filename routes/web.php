<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CorsMiddleware;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [ContatoController::class, 'index']);

Route::get('contatos/cadastro', [ContatoController::class, 'cadastrar']);

Route::post('contatos/create', [ContatoController::class, 'store']);

Route::delete('contatos/delete/{id}', [ContatoController::class, 'destroy']);

Route::put('contatos/update/{id}', [ContatoController::class, 'edit']);

Route::get('contatos/search', [ContatoController::class, 'filtrar']);