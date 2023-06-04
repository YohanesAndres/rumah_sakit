<!-- resources/views/pengobatans/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Pengobatan</h1>
        <form action="{{ route('pengobatans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pasien_id">Pasien</label>
                <select name="pasien_id" id="pasien_id" class="form-control">
                    @foreach ($pasiens as $pasien)
                        <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dokter_id">Dokter</label>
                <select name="dokter_id" id="dokter_id" class="form-control">
                    @foreach ($dokters as $dokter)
                        <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
