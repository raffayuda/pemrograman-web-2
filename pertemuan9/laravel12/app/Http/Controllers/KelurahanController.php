<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahan = Kelurahan::all();
        return view('kelurahan.index', compact('kelurahan'));
    }
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('kelurahan.index', compact('kelurahan'));
    }

    public function store(Request $request) {
        Kelurahan::create($request->validate(['nama' => 'required']));
        return redirect()->route('kelurahan.index');
    }
    
    public function update(Request $request, $id) {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->update($request->validate(['nama' => 'required']));
        return redirect()->route('kelurahan.index');
    }
    
    public function destroy($id) {
        Kelurahan::destroy($id);
        return redirect()->route('kelurahan.index');
    }
    
}
