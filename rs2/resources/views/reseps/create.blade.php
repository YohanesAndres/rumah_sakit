<!-- resources/views/reseps/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Resep</h1>
        <form action="{{ route('reseps.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pengobatan_id">Pengobatan</label>
                <select class="form-control" id="pengobatan_id" name="pengobatan_id">
                    @foreach ($pengobatans as $pengobatan)
                        <option value="{{ $pengobatan->id }}">{{ $pengobatan->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="obat_id">Obat</label>
                <select class="form-control" id="obat_id" name="obat_id">
                    @foreach ($obats as $obat)
                        <option value="{{ $obat->id }}">{{ $obat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
