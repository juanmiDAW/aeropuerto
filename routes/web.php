<?php

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\VueloController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::resource('vuelos', VueloController::class);

// Route::get('reservas/{vuelo}',ReservaController::class)->name('reservas.store');

Route::resource('reservas', ReservaController::class);