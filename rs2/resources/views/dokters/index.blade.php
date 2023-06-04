<!-- resources/views/dokters/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dokter</h1>
        <a href="{{ route('dokters.create') }}" class="btn btn-primary mb-3">Tambah Dokter</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokters as $dokter)
                    <tr>
                        <td>{{ $dokter->id }}</td>
                        <td>{{ $dokter->nama }}</td>
                        <td>{{ $dokter->kategori->nama }}</td>
                        <td>{{ $dokter->alamat }}</td>
                        <td>{{ $dokter->no_telp }}</td>
                        <td>
                            <a href="{{ route('dokters.show', $dokter->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                            <a href="{{ route('dokters.edit', $dokter->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('dokters.destroy', $dokter->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus dokter ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
