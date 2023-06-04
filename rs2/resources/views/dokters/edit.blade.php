<!-- resources/views/dokters/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Dokter</h1>
        <form action="{{ route('dokters.update', $dokter->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $dokter->nama }}" required>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id" required>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" @if ($dokter->kategori_id == $kategori->id) selected @endif>{{ $kategori->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dokter->alamat }}" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $dokter->no_telp }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
