<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/arsa', [\App\Http\Controllers\HomeController::class, 'arsa'])->name('arsa');
