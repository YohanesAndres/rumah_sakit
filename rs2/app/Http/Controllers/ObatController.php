<?php

namespace App\Http\Controllers;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();

        return view('obats.index', compact('obats'));
    }

    public function create()
    {
        return view('obats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required|integer',
        ]);

        Obat::create($request->all());

        return redirect()->route('obats.index')->with('success', 'Obat created successfully.');
    }

    public function show($id)
    {
        $obat = Obat::findOrFail($id);

        return view('obats.show', compact('obat'));
    }

    public function edit($id)
    {
        $obat = Obat::findOrFail($id);

        return view('obats.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required|integer',
        ]);

        $obat = Obat::findOrFail($id);
        $obat->update($request->all());

        return redirect()->route('obats.index')->with('success', 'Obat updated successfully.');
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('obats.index')->with('success', 'Obat deleted successfully.');
    }
}
