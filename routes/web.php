<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'Beamount',
        'nim'   => '0123456789',
        'kelas' => 'TRM-00',
    ]);
});

Route::get('/hello', function () {
    return view('pages.hello');
});

Route::get('/home', function () {
    return view('pages.home');
});