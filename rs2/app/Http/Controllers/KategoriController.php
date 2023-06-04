<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();

        return view('kategoris.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategoris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Kategori::create($request->all());

        return redirect()->route('kategoris.index')->with('success', 'Kategori created successfully.');
    }

    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('kategoris.show', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('kategoris.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('kategoris.index')->with('success', 'Kategori updated successfully.');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategoris.index')->with('success', 'Kategori deleted successfully.');
    }
}
