<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/map', function () {
    return view('map');
})->name('map');


