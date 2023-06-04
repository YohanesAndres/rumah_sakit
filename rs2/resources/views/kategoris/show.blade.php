<!-- resources/views/kategoris/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Kategori</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $kategori->id }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $kategori->nama }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('kategoris.edit', $kategori->id) }}" class="btn btn-primary">Edit</a>
    </div>
@endsection
