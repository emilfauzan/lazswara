<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Emil']);
});

Route::get('/program', function () {
    return view('program', ['nama' => 'Emil']);
});
