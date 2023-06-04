<!-- resources/views/reseps/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Resep</h1>
        <form action="{{ route('reseps.update', $resep->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pengobatan_id">Pengobatan</label>
                <select class="form-control" id="pengobatan_id" name="pengobatan_id">
                    @foreach ($pengobatans as $pengobatan)
                        <option value="{{ $pengobatan->id }}" @if ($resep->pengobatan_id == $pengobatan->id) selected @endif>{{ $pengobatan->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="obat_id">Obat</label>
                <select class="form-control" id="obat_id" name="obat_id">
                    @foreach ($obats as $obat)
                        <option value="{{ $obat->id }}" @if ($resep->obat_id == $obat->id) selected @endif>{{ $obat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
