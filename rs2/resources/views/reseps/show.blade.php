<!-- resources/views/reseps/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Resep</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $resep->id }}</td>
                </tr>
                <tr>
                    <th>Pengobatan</th>
                    <td>{{ $resep->pengobatan->id }}</td>
                </tr>
                <tr>
                    <th>Obat</th>
                    <td>{{ $resep->obat->nama }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
