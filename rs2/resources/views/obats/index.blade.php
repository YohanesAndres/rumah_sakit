<!-- resources/views/obats/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Obat</h1>
        <a href="{{ route('obats.create') }}" class="btn btn-primary mb-3">Tambah Obat</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obats as $obat)
                    <tr>
                        <td>{{ $obat->id }}</td>
                        <td>{{ $obat->nama }}</td>
                        <td>{{ $obat->stok }}</td>
                        <td>
                            <a href="{{ route('obats.show', $obat->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                            <a href="{{ route('obats.edit', $obat->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('obats.destroy', $obat->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus obat ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
