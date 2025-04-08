<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/about', function () {
    return view('about.index');
})->name('about.index');
