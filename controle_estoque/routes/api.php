<?php

use App\Http\Controllers\FornecedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/fornecedores', [FornecedorController::class, 'store']);
Route::get('/fornecedores', [FornecedorController::class, 'index']);