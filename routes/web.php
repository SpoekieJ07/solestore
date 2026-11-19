<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/brands/{id}', [BrandController::class, 'show'])->name('brands.show');

Route::get('/over', function () {
    return view('over');
})->middleware(['auth'])->name('over');

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth'])->name('contact');
