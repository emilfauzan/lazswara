<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Bersama Mandirikan Ummat']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Kenali Tim Swara']);
});

Route::get('/program', function () {
    return view('program', ['title' => 'Program Kami']);
});

Route::get('/zakat', function () {
    return view('zakat', ['title' => 'Makna Berzakat']);
});
