<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ComentariosController;
Route::get('/', function () {
    return view('welcome');

    
});

Route::get('/login', [LoginController::class,'index']);
Route::post('/procesar-login-post', [LoginController::class, 'procesar'])->name('login.procesar');

Route::get('/comentario', [ComentariosController::class, 'index'])->name('n.index');
Route::post('/guardar-comentario', [ComentariosController::class, 'guardar'])->name('n.guardar');
