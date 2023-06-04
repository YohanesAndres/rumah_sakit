<!-- resources/views/obats/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Obat</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $obat->id }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $obat->nama }}</td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>{{ $obat->stok }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('obats.edit', $obat->id) }}" class="btn btn-primary">Edit</a>
    </div>
@endsection
