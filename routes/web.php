<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Wujudkan Kemandirian Ummat', 'titlepage' => 'LAZ SWARA']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Kenali Tim Swara', 'titlepage' => 'Tentang Kami - LAZ SWARA']);
});

Route::get('/program', function () {
    return view('program', ['title' => 'Program Kami', 'titlepage' => 'Program - LAZ SWARA']);
});

Route::get('/zakat', function () {
    return view('zakat', ['title' => 'Makna Berzakat', 'titlepage' => 'Zakat - LAZ SWARA']);
});

Route::get('/laporan', function () {
    return view('laporan', ['title' => 'Layanan Zakat', 'titlepage' => 'Laporan Keuangan - LAZ SWARA']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Posts',
        'titlepage' => 'Posts',
        'posts' =>  Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'titlepage' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles by ' . $user->name, 'titlepage' => 'Author', 'posts' => $user->posts]);
});

Route::get('/rekening', function () {
    return view('rekening', ['title' => 'Layanan Zakat', 'titlepage' => 'Rekening - LAZ SWARA']);
});

// Route to generate and download PDF 2020
Route::get('/files/SMU - Laporan Akhir Tahun 2020.pdf', function () {
    $data = [
        'title' => 'Laporan Kinerja Pengelolaan Zakat Akhir Tahun 2020',
        'content' => 'Lihat laporan kinerja pengelolaan zakat tahun 2020 dalam format PDF.'
    ];

    $pdf = Pdf::loadView('pdf.laporan', $data);
    return $pdf->download('SMU - Laporan Akhir Tahun 2020.pdf');
});

// Route to generate and download PDF 2021
Route::get('/files/SMU - Laporan Akhir Tahun 2021.pdf', function () {
    $data = [
        'title' => 'Laporan Kinerja Pengelolaan Zakat Akhir Tahun 2021',
        'content' => 'Lihat laporan kinerja pengelolaan zakat tahun 2021 dalam format PDF.'
    ];

    $pdf = Pdf::loadView('pdf.laporan', $data);
    return $pdf->download('SMU - Laporan Akhir Tahun 2021.pdf');
});

// Route to generate and download PDF 2022
Route::get('/files/SMU - Laporan Akhir Tahun 2022.pdf', function () {
    $data = [
        'title' => 'Laporan Kinerja Pengelolaan Zakat Akhir Tahun 2022',
        'content' => 'Lihat laporan kinerja pengelolaan zakat tahun 2022 dalam format PDF.'
    ];

    $pdf = Pdf::loadView('pdf.laporan', $data);
    return $pdf->download('SMU - Laporan Akhir Tahun 2022.pdf');
});

// Route to generate and download PDF 2023
Route::get('/files/SMU - Laporan Akhir Tahun 2023.pdf', function () {
    $data = [
        'title' => 'Laporan Kinerja Pengelolaan Zakat Akhir Tahun 2023',
        'content' => 'Lihat laporan kinerja pengelolaan zakat tahun 2023 dalam format PDF.'
    ];

    $pdf = Pdf::loadView('pdf.laporan', $data);
    return $pdf->download('SMU - Laporan Akhir Tahun 2023.pdf');
});

// Route to generate and download PDF 2024
Route::get('/files/SMU - Laporan Akhir Tahun 2024.pdf', function () {
    $data = [
        'title' => 'Laporan Kinerja Pengelolaan Zakat Akhir Tahun 2024',
        'content' => 'Lihat laporan kinerja pengelolaan zakat tahun 2024 dalam format PDF.'
    ];

    $pdf = Pdf::loadView('pdf.laporan', $data);
    return $pdf->download('SMU - Laporan Akhir Tahun 2024.pdf');
});
