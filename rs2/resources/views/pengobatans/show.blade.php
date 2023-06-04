<!-- resources/views/pengobatans/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Pengobatan</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $pengobatan->id }}</td>
                </tr>
                <tr>
                    <th>Pasien</th>
                    <td>{{ $pengobatan->pasien->nama }}</td>
                </tr>
                <tr>
                    <th>Dokter</th>
                    <td>{{ $pengobatan->dokter->nama }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>{{ $pengobatan->keterangan }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pengobatans.edit', $pengobatan->id) }}" class="btn btn-primary">Edit</a>
    </div>
@endsection
