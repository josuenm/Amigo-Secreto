<?php

use App\Http\Controllers\Auth\CadastrarPessoaController;
use App\Http\Controllers\Auth\InicioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [InicioController::class, 'index'])->name('auth.inicio');
Route::get('/cadastrar-pessoa', [CadastrarPessoaController::class, 'index'])->name('auth.cadastrar-pessoa');
