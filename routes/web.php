<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ilan-ekle/{type?}/', [\App\Http\Controllers\AdminController::class, 'add_advert'])->name('ilan-ekle');
Route::post('/ilan-ekle/{type?}/', [\App\Http\Controllers\AdminController::class, 'add_advert'])->name('ilan-ekle');
Route::get('/admin/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/ilanlar', [\App\Http\Controllers\AdminController::class, 'ilanlar'])->name('ilanlar');
Route::get('/admin/mesajlar', [\App\Http\Controllers\AdminController::class, 'messages'])->name('messages');
Route::get('/admin/mesaj-goruntule/{id?}', [\App\Http\Controllers\AdminController::class, 'show_message'])->name('show-message');
Route::get('/arsa', [\App\Http\Controllers\HomeController::class, 'arsa'])->name('arsa');
Route::get('/gayrimenkul', [\App\Http\Controllers\HomeController::class, 'gayrimenkul'])->name('gayrimenkul');
Route::get('/dolmus', [\App\Http\Controllers\HomeController::class, 'dolmus'])->name('dolmus');
Route::get('/plaka', [\App\Http\Controllers\HomeController::class, 'plaka'])->name('plaka');
Route::get('/rentacar', [\App\Http\Controllers\HomeController::class, 'rentacar'])->name('rentacar');
Route::get('/otomotiv', [\App\Http\Controllers\HomeController::class, 'otomotiv'])->name('otomotiv');
Route::get('/yatirim', [\App\Http\Controllers\HomeController::class, 'yatirim'])->name('yatirim');
Route::get('/oto-yikama', [\App\Http\Controllers\HomeController::class, 'otoyikama'])->name('otoyikama');
Route::get('/admin/delete/{type?}/{id?}', [\App\Http\Controllers\AdminController::class, 'delete_advert'])->name('delete_advert');
Route::get('/admin/delete_message/{id?}', [\App\Http\Controllers\AdminController::class, 'delete_message'])->name('delete_message');
Route::get('/ilan/{type?}/{id?}', [\App\Http\Controllers\HomeController::class, 'ilan'])->name('ilan');
