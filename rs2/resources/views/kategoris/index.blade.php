<!-- resources/views/kategoris/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kategori</h1>
        <a href="{{ route('kategoris.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->nama }}</td>
                        <td>
                            <a href="{{ route('kategoris.show', $kategori->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                            <a href="{{ route('kategoris.edit', $kategori->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('kategoris.destroy', $kategori->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
