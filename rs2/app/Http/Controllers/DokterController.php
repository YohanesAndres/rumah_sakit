<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::with('kategori')->get();
        $kategoris = Kategori::all();

        return view('dokters.index', compact('dokters', 'kategoris'));
    }

    public function create()
    {
        $kategoris = Kategori::all();

        return view('dokters.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokters.index')->with('success', 'Dokter created successfully.');
    }

    public function show($id)
    {
        $dokter = Dokter::findOrFail($id);

        return view('dokters.show', compact('dokter'));
    }

    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        $kategoris = Kategori::all();

        return view('dokters.edit', compact('dokter', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $dokter = Dokter::findOrFail($id);
        $dokter->update($request->all());

        return redirect()->route('dokters.index')->with('success', 'Dokter updated successfully.');
    }

    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokters.index')->with('success', 'Dokter deleted successfully.');
    }
}
