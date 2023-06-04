<?php

namespace App\Http\Controllers;
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
        return view('pasiens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Pasien created successfully.');
    }

    public function show($id)
    {
        $pasien = Pasien::findOrFail($id);

        return view('pasiens.show', compact('pasien'));
    }

    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);

        return view('pasiens.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Pasien updated successfully.');
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasiens.index')->with('success', 'Pasien deleted successfully.');
    }
}
