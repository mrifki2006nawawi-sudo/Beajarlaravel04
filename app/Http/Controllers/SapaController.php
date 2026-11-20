<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Rifki Beamount';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}