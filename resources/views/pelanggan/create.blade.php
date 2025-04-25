@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Tambah Pelanggan</h2>
        <form method="POST" action="{{ route('pelanggan.store') }}">
            @csrf
            <div class="mb-3">
                <label for="NAMA_PELANGGAN" class="form-label">Nama:</label>
                <input type="text" name="NAMA_PELANGGAN" id="NAMA_PELANGGAN" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="JENIS_KELAMIN" class="form-label">Jenis Kelamin:</label>
                <select name="JENIS_KELAMIN" id="JENIS_KELAMIN" class="form-select" required>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
