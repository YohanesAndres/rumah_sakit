<!-- resources/views/pengobatans/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pengobatan</h1>
        <form action="{{ route('pengobatans.update', $pengobatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pasien_id">Pasien</label>
                <select name="pasien_id" id="pasien_id" class="form-control">
                    @foreach ($pasiens as $pasien)
                        <option value="{{ $pasien->id }}" @if($pasien->id == $pengobatan->pasien_id) selected @endif>{{ $pasien->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dokter_id">Dokter</label>
                <select name="dokter_id" id="dokter_id" class="form-control">
                    @foreach ($dokters as $dokter)
                        <option value="{{ $dokter->id }}" @if($dokter->id == $pengobatan->dokter_id) selected @endif>{{ $dokter->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control">{{ $pengobatan->keterangan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
