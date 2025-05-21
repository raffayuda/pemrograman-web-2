<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasienRequest;
use App\Models\Kelurahan;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasiens.index', compact('pasiens'));
    }

    public function create()
    {
        $kelurahans = Kelurahan::all();
        return view('pasiens.create', compact('kelurahans'));
    }

    public function store(Request $request)
    {
        Pasien::create($request->all());
        return redirect()->route('pasiens.index')->with('success', 'Pasien created successfully.');
    }

    public function show(Pasien $pasien)
    {
        $pasien = Pasien::findOrFail($pasien->id);
        $kelurahan = Kelurahan::findOrFail($pasien->kelurahan_id);
        return view('pasiens.show', compact('pasien', 'kelurahan'));
    }

    public function edit(Pasien $pasien)
    {
        return view('pasiens.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $pasien->update($request->validated());
        return redirect()->route('pasiens.index')->with('success', 'Pasien updated successfully.');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasiens.index')->with('success', 'Pasien deleted successfully.');
    }
}