<?php

use App\Http\Controllers\AccessController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AccessController::class, 'register'])->name('auth.register');
Route::post('/login', [AccessController::class, 'login'])->name('auth.login');
Route::post('/logout', [AccessController::class, 'logout'])->name('auth.logout');
