<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function show()
    {
        $prodi = new Prodi('IF', 'Informatika', 'Budi');
        $prodi->kaprodi = 'Budi';
        $prodi2 = new Prodi('SI', 'Sistem Informasi', 'Budi');
        $prodi2->kaprodi = 'Budi';
        $arrProdi = [$prodi, $prodi2];
        return view('prodi.index', ['arrProdi' => $arrProdi]);
    }
}
