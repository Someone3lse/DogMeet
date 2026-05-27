<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacoteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::view('/', 'home');
    Route::view('/login', 'login');
    Route::view('/animais', 'animais');
    Route::view('/animal', 'animal-detalhes');
    Route::view('/cadastro-animal', 'cadastro-animal');
    Route::view('/dicas', 'dicas');
    Route::view('/denuncia', 'denuncia');
    Route::view('/admin', 'admin');

Route::get('/pacotes', [PacoteController::class, 'index']);