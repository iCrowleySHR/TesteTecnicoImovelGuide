<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CorretorController;

Route::get('/', [CorretorController::class, 'index']);
Route::post('/cadastrar', [CorretorController::class, 'store']);
Route::get('/editar/{id}', [CorretorController::class, 'edit']);
Route::put('/atualizar/{id}', [CorretorController::class, 'update'])->name('corretores.update');
Route::get('/excluir/{id}', [CorretorController::class, 'destroy']);
