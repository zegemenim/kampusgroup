<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/ilanlar', [\App\Http\Controllers\AdminController::class, 'ilanlar'])->name('ilanlar');
Route::get('/arsa', [\App\Http\Controllers\HomeController::class, 'arsa'])->name('arsa');
Route::get('/ilan/{id}', [\App\Http\Controllers\HomeController::class, 'ilan'])->name('ilan');
