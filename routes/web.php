<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ilan-ekle/{type?}/', [\App\Http\Controllers\AdminController::class, 'add_advert'])->name('ilan-ekle');
Route::post('/ilan-ekle/{type?}/', [\App\Http\Controllers\AdminController::class, 'add_advert'])->name('ilan-ekle');
Route::get('/admin/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/ilanlar', [\App\Http\Controllers\AdminController::class, 'ilanlar'])->name('ilanlar');
Route::get('/arsa', [\App\Http\Controllers\HomeController::class, 'arsa'])->name('arsa');
Route::get('/gayrimenkul', [\App\Http\Controllers\HomeController::class, 'gayrimenkul'])->name('gayrimenkul');
Route::get('/dolmus', [\App\Http\Controllers\HomeController::class, 'dolmus'])->name('dolmus');
Route::get('/plaka', [\App\Http\Controllers\HomeController::class, 'plaka'])->name('plaka');
Route::get('/rentacar', [\App\Http\Controllers\HomeController::class, 'rentacar'])->name('rentacar');
Route::get('/otomotiv', [\App\Http\Controllers\HomeController::class, 'otomotiv'])->name('otomotiv');
Route::get('/ilan/{type?}/{id?}', [\App\Http\Controllers\HomeController::class, 'ilan'])->name('ilan');
