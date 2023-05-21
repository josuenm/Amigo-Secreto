<?php

use App\Http\Controllers\Auth\AccessController;
use App\Http\Controllers\Auth\HandlePersonController;
use App\Http\Controllers\Auth\HomeController;
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

Route::post('/cadastrar-pessoa', [HandlePersonController::class, 'createPerson'])->name('auth.create-person');
Route::get('/cadastrar-pessoa', [HandlePersonController::class, 'createPersonPage'])->name('auth.create-person.page');

Route::post('/editar-pessoa', [HandlePersonController::class, 'editPerson'])->name('auth.edit-person');
Route::get('/editar-pessoa', [HandlePersonController::class, 'editPersonPage'])->name('auth.edit-person.page');

Route::get('/login', [AccessController::class, 'loginPage'])->name('login.page');
Route::get('/register', [AccessController::class, 'registerPage'])->name('register.page');


Route::get('/', [HomeController::class, 'index'])->name('auth.inicio');
