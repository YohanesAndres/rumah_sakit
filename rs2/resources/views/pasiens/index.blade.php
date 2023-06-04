<!-- resources/views/pasiens/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pasien</h1>
        <a href="{{ route('pasiens.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasiens as $pasien)
                    <tr>
                        <td>{{ $pasien->id }}</td>
                        <td>{{ $pasien->nik }}</td>
                        <td>{{ $pasien->nama }}</td>
                        <td>{{ $pasien->tgl_lahir }}</td>
                        <td>{{ $pasien->jenis_kelamin }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>
                            <a href="{{ route('pasiens.show', $pasien->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                            <a href="{{ route('pasiens.edit', $pasien->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pasien ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
