@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Transaksi</h1>
        
        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="ID_PELANGGAN" class="form-label">Pelanggan</label>
                <select name="ID_PELANGGAN" id="ID_PELANGGAN" class="form-control @error('ID_PELANGGAN') is-invalid @enderror">
                    <option value="">Pilih Pelanggan</option>
                    @foreach ($pelanggan as $pelangganItem)
                        <option value="{{ $pelangganItem->ID_PELANGGAN }}">{{ $pelangganItem->NAMA_PELANGGAN }}</option>
                    @endforeach
                </select>
                @error('ID_PELANGGAN')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="TANGGAL_TRANSAKSI" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control @error('TANGGAL_TRANSAKSI') is-invalid @enderror" name="TANGGAL_TRANSAKSI" value="{{ old('TANGGAL_TRANSAKSI') }}">
                @error('TANGGAL_TRANSAKSI')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="TOTAL_HARGA" class="form-label">Total Harga</label>
                <input type="number" step="0.01" class="form-control @error('TOTAL_HARGA') is-invalid @enderror" name="TOTAL_HARGA" value="{{ old('TOTAL_HARGA') }}">
                @error('TOTAL_HARGA')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="METODE_PEMBAYARAN" class="form-label">Metode Pembayaran</label>
                <input type="text" class="form-control @error('METODE_PEMBAYARAN') is-invalid @enderror" name="METODE_PEMBAYARAN" value="{{ old('METODE_PEMBAYARAN') }}">
                @error('METODE_PEMBAYARAN')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
        </form>
    </div>
@endsection
