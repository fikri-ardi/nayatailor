<?php

use App\Http\Controllers\OrderController;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::view('/about', 'about')->name('about');

Route::get('/order', [OrderController::class, 'index']);
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);
Route::post('/checkout', [OrderController::class, 'checkout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
