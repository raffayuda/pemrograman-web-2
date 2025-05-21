<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    /** @use HasFactory<\Database\Factories\ProdiFactory> */
    use HasFactory;

    public $kode;
    public $nama;
    public $kaprodi;

    function __construct($kode, $nama, $kaprodi)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->kaprodi = $kaprodi;
    }
}
