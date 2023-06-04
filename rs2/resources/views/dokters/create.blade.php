<!-- resources/views/dokters/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Dokter</h1>
        <form action="{{ route('dokters.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id" required>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
