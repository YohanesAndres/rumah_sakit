<?php

namespace App\Http\Controllers;
use App\Models\Pengobatan;
use App\Models\Obat;
use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        $reseps = Resep::with('pengobatan', 'obat')->get();
        $pengobatans = Pengobatan::all();
        $obats = Obat::all();

        return view('reseps.index', compact('reseps', 'pengobatans', 'obats'));
    }

    public function create()
    {
        $pengobatans = Pengobatan::all();
        $obats = Obat::all();

        return view('reseps.create', compact('pengobatans', 'obats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengobatan_id' => 'required',
            'obat_id' => 'required',
        ]);

        Resep::create($request->all());

        return redirect()->route('reseps.index')->with('success', 'Resep created successfully.');
    }

    public function show($id)
    {
        $resep = Resep::findOrFail($id);

        return view('reseps.show', compact('resep'));
    }

    public function edit($id)
    {
        $resep = Resep::findOrFail($id);
        $pengobatans = Pengobatan::all();
        $obats = Obat::all();

        return view('reseps.edit', compact('resep', 'pengobatans', 'obats'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pengobatan_id' => 'required',
            'obat_id' => 'required',
        ]);

        $resep = Resep::findOrFail($id);
        $resep->update($request->all());

        return redirect()->route('reseps.index')->with('success', 'Resep updated successfully.');
    }

    public function destroy($id)
    {
        $resep = Resep::findOrFail($id);
        $resep->delete();

        return redirect()->route('reseps.index')->with('success', 'Resep deleted successfully.');
    }
}
