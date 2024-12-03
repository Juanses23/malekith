<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', [HomeController::class, 'indexadmin']);

Route::get('/logout', [HomeController::class, 'logout']);

Route::get('/inicio', [HomeController::class, 'inicio']);

Route::post('/carrito', [HomeController::class, 'carrito'])->name('carrito.agregar');

Route::get('/carrito1', [HomeController::class, 'carrito1']);

Route::post('/pagar', [HomeController::class, 'pagar']);

Route::get('/iniciarsesion', [HomeController::class, 'iniciarsesion']);

Route::post('/iniciarsesion1', [HomeController::class, 'iniciarsesion1']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
