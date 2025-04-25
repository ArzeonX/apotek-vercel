@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Edit Obat</h2>
        <form action="{{ route('obat.update', $obat->ID_OBAT) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="NAMA_OBAT" class="form-label">Nama Obat:</label>
                <input type="text" name="NAMA_OBAT" id="NAMA_OBAT" class="form-control" value="{{ $obat->NAMA_OBAT }}" required>
            </div>
            <div class="mb-3">
                <label for="KATEGORI" class="form-label">Kategori:</label>
                <input type="text" name="KATEGORI" id="KATEGORI" class="form-control" value="{{ $obat->KATEGORI }}" required>
            </div>
            <div class="mb-3">
                <label for="KETERANGAN" class="form-label">Keterangan:</label>
                <textarea name="KETERANGAN" id="KETERANGAN" class="form-control">{{ $obat->KETERANGAN }}</textarea>
            </div>
            <div class="mb-3">
                <label for="JUMLAH_STOCK" class="form-label">Jumlah Stock:</label>
                <input type="number" name="JUMLAH_STOCK" id="JUMLAH_STOCK" class="form-control" value="{{ $obat->JUMLAH_STOCK }}" required>
            </div>
            <div class="mb-3">
                <label for="HARGA" class="form-label">Harga:</label>
                <input type="number" step="0.01" name="HARGA" id="HARGA" class="form-control" value="{{ $obat->HARGA }}" required>
            </div>
            <div class="mb-3">
                <label for="EXP" class="form-label">Tanggal Exp:</label>
                <input type="date" name="EXP" id="EXP" class="form-control" value="{{ $obat->EXP }}" required>
            </div>
            <div class="mb-3">
                <label for="ID_SUPPLIER" class="form-label">Supplier:</label>
                <select name="ID_SUPPLIER" id="ID_SUPPLIER" class="form-select" required>
                    <option value="">Pilih Supplier</option>
                    @foreach($suppliers as $s)
                        <option value="{{ $s->ID_SUPPLIER }}" {{ $obat->ID_SUPPLIER == $s->ID_SUPPLIER ? 'selected' : '' }}>
                            {{ $s->NAMA_SUPPLIER }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
