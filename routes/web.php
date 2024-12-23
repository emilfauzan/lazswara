<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['name' => 'Emil Fauzan']);
});

Route::get('/program', function () {
    return view('program', ['title' => 'Program'], ['nama' => 'Emil']);
});
