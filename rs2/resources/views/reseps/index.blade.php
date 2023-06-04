<!-- resources/views/reseps/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Resep</h1>
        <a href="{{ route('reseps.create') }}" class="btn btn-primary mb-3">Tambah Resep</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pengobatan</th>
                    <th>Obat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reseps as $resep)
                    <tr>
                        <td>{{ $resep->id }}</td>
                        <td>{{ $resep->pengobatan->pasien->nama }}</td>
                        <td>{{ $resep->obat->nama }}</td>
                        <td>
                            <a href="{{ route('reseps.show', $resep->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                            <a href="{{ route('reseps.edit', $resep->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('reseps.destroy', $resep->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus resep ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
