<?php

use App\Http\Controllers\AulasController;
use Illuminate\Support\Facades\Route;

Route::get('/aulas', [AulasController::class, 'index']);

Route::get('/aulas', function(){
    return view('aulas.index');
});

Route::prefix('aulas')->group(function(){
    Route::get('/', [AulasController::class, 'index']) -> name('aulas-index');
    Route::get('/create', [AulasController::class, 'create']) -> name('aulas-create');
    Route::post('/', [AulasController::class, 'sotre']) -> name('aulas-store');
});

Route::fallback(function(){
    return "Página Inválida";
});

