<!-- resources/views/kategoris/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kategori</h1>
        <form action="{{ route('kategoris.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
