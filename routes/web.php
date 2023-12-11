<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/order', [OrderController::class, 'index']);
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);
Route::post('/checkout', [OrderController::class, 'checkout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';