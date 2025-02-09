<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Wujudkan Kemandirian Ummat']);
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

Route::get('/laporan', function () {
    return view('laporan', ['title' => 'Layanan Zakat']);
});

Route::get('/rekening', function () {
    return view('rekening', ['title' => 'Layanan Zakat']);
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
