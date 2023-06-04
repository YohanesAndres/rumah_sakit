<!-- resources/views/pasiens/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Pasien</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $pasien->id }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $pasien->nik }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $pasien->nama }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $pasien->tgl_lahir }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $pasien->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $pasien->alamat }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pasiens.edit', $pasien->id) }}" class="btn btn-primary">Edit</a>
    </div>
@endsection
