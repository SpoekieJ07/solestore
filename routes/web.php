<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/over', function () {
    return view('over');
})->middleware(['auth'])->name('over');

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth'])->name('contact');