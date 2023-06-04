<!-- resources/views/pengobatans/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pengobatan</h1>
        <a href="{{ route('pengobatans.create') }}" class="btn btn-primary mb-3">Tambah Pengobatan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pasien</th>
                    <th>Dokter</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengobatans as $pengobatan)
                    <tr>
                        <td>{{ $pengobatan->id }}</td>
                        <td>{{ $pengobatan->pasien->nama }}</td>
                        <td>{{ $pengobatan->dokter->nama }}</td>
                        <td>{{ $pengobatan->keterangan }}</td>
                        <td>
                            <a href="{{ route('pengobatans.show', $pengobatan->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                            <a href="{{ route('pengobatans.edit', $pengobatan->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('pengobatans.destroy', $pengobatan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengobatan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
