<!-- resources/views/pasiens/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Pasien</h1>
        <form action="{{ route('pasiens.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
