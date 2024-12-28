<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/cadastro', [ContactController::class, 'cadastro'])->name('novo');
Route::post('/cadastro/criar', [ContactController::class, 'store'])->name('novo');
Route::delete('/cadastro/delete/{id}', [ContactController::class, 'delete']);
Route::put('/cadastro/update/{id}', [ContactController::class, 'update']);
