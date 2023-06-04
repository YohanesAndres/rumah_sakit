<!-- resources/views/dokters/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Dokter</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $dokter->id }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $dokter->nama }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $dokter->kategori->nama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $dokter->alamat }}</td>
                </tr>
                <tr>
                    <th>No. Telp</th>
                    <td>{{ $dokter->no_telp }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
