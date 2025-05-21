<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index', [
            'nama' => 'Boday',
            'nim' => '12345678',
            'jurusan' => 'Teknik Informatika',
            'angkatan' => '2021'
        ]);
    }
}
