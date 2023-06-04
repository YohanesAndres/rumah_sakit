<!-- resources/views/pasiens/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pasien</h1>
        <form action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" value="{{ $pasien->nik }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $pasien->nama }}">
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ $pasien->tgl_lahir }}">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="Laki-laki" @if($pasien->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                    <option value="Perempuan" @if($pasien->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ $pasien->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
