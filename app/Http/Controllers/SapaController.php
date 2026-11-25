<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Vanya Esvanolla';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}

