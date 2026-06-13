<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// 1. Cargar tu vista hermosa de login (ahora sé que está en products.login)
Route::get('/', function () {
    return view('products.login');
})->name('login');

Route::get('/login', function () {
    return redirect('/');
});

// 2. Procesar el formulario apuntando AL CONTROLADOR (él buscará en tu BD)
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 3. Proteger tu dashboard con el candado oficial
Route::get('/dashboard', function () {
    return view('products.dashboard');
})->middleware('auth'); // Expulsa automáticamente a los no logueados