<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/variants', function () {
    return view('variants');
})->name('variants');
Route::get('/advantages', function () {
    return view('advantages');
})->name('advantages');
