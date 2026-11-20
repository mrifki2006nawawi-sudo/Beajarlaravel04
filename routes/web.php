<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;

// 1. Route Beranda
Route::get('/', function () {
    return view('pages.beranda');
});

// 2. Route About
Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'Rifki Beamount',
        'kelas' => 'D4SM-48-04',
        'nim'   => '707082400112',
    ]);
});

// 3. Route Contact & Latihan
Route::view('/contact', 'pages.contact');

Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
    return view('pages.latihan', ['matakuliah' => $matakuliah]);
});

// 4. Route Sapa
Route::get('/sapa', [SapaController::class, 'index']);

// 5. Route Product (Modul 9)
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product', [ProductController::class, 'store']);