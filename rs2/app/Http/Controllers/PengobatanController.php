<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Pengobatan;
use Illuminate\Http\Request;

class PengobatanController extends Controller
{
    public function index()
    {
        $pengobatans = Pengobatan::with('pasien', 'dokter')->get();
        $pasiens = Pasien::all();
        $dokters = Dokter::all();

        return view('pengobatans.index', compact('pengobatans', 'pasiens', 'dokters'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();

        return view('pengobatans.create', compact('pasiens', 'dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'keterangan' => 'required',
        ]);

        Pengobatan::create($request->all());

        return redirect()->route('pengobatans.index')->with('success', 'Pengobatan created successfully.');
    }

    public function show($id)
    {
        $pengobatan = Pengobatan::findOrFail($id);

        return view('pengobatans.show', compact('pengobatan'));
    }

    public function edit($id)
    {
        $pengobatan = Pengobatan::findOrFail($id);
        $pasiens = Pasien::all();
        $dokters = Dokter::all();

        return view('pengobatans.edit', compact('pengobatan', 'pasiens', 'dokters'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'keterangan' => 'required',
        ]);

        $pengobatan = Pengobatan::findOrFail($id);
        $pengobatan->update($request->all());

        return redirect()->route('pengobatans.index')->with('success', 'Pengobatan updated successfully.');
    }

    public function destroy($id)
    {
        $pengobatan = Pengobatan::findOrFail($id);
        $pengobatan->delete();

        return redirect()->route('pengobatans.index')->with('success', 'Pengobatan deleted successfully.');
    }
}
