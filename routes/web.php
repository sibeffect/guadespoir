<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::inertia('/', HomeController::class, 'index')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
