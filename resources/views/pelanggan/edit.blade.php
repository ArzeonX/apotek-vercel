@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Edit Data Pelanggan</h2>
        <form action="{{ route('pelanggan.update', $pelanggan->ID_PELANGGAN) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="NAMA_PELANGGAN" class="form-label">Nama Pelanggan:</label>
                <input type="text" name="NAMA_PELANGGAN" id="NAMA_PELANGGAN" class="form-control" value="{{ $pelanggan->NAMA_PELANGGAN }}" required>
            </div>

            <div class="mb-3">
                <label for="JENIS_KELAMIN" class="form-label">Jenis Kelamin:</label>
                <select name="JENIS_KELAMIN" id="JENIS_KELAMIN" class="form-select" required>
                    <option value="Laki-Laki" {{ $pelanggan->JENIS_KELAMIN == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="Perempuan" {{ $pelanggan->JENIS_KELAMIN == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
