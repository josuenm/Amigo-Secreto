<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\Auth\GivewayController;
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

// COMEÇO: WEB APIS
Route::post('/cadastrar-pessoa', [HandlePersonController::class, 'createPerson'])
    ->name('auth.create-person')
    ->middleware('auth');
Route::patch('/editar-pessoa/{id}/', [HandlePersonController::class, 'editPerson'])
    ->name('auth.edit-person')
    ->middleware('auth');
Route::delete('/deletar-pessoa/{id}/', [HandlePersonController::class, 'deletePerson'])
    ->name('auth.delete-person')
    ->middleware('auth');
Route::post('/login', [AccessController::class, 'login'])->name('auth.login');
Route::post('/register', [AccessController::class, 'register'])->name('auth.register');
Route::post('/logout', [AccessController::class, 'logout'])->name('logout');
Route::get('/search-people', [HomeController::class, 'searchPeople'])
    ->name('auth.search.people')
    ->middleware('auth');
Route::post('/sorteio', [GivewayController::class, 'makeGiveway'])
    ->name('auth.make.giveway')
    ->middleware('auth');
// FIM: WEB APIS


// COMEÇO: PÁGINAS
Route::get('/login', [AccessController::class, 'loginPage'])->name('login.page');
Route::get('/register', [AccessController::class, 'registerPage'])->name('register.page');
Route::get('/sorteio', [GivewayController::class, 'index'])->name('giveway.page');
Route::get('/', [HomeController::class, 'index'])
    ->name('auth.home.page')
    ->middleware('auth');
Route::get('/editar-pessoa/{id}/', [HandlePersonController::class, 'editPersonPage'])
    ->name('auth.edit-person.page')
    ->middleware('auth');
Route::get('/cadastrar-pessoa', [HandlePersonController::class, 'createPersonPage'])
    ->name('auth.create-person.page')
    ->middleware('auth');
// FIM: PÁGINAS
