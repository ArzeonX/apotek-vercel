@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Detail Transaksi</h2>
    <form action="{{ route('detailTransaksi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="ID_PELANGGAN" class="form-label">Pelanggan:</label>
            <select name="ID_PELANGGAN" id="ID_PELANGGAN" class="form-select" required>
                @foreach($pelanggan as $p)
                    <option value="{{ $p->ID_PELANGGAN }}">{{ $p->NAMA_PELANGGAN }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ID_OBAT" class="form-label">Obat:</label>
            <select name="ID_OBAT" id="ID_OBAT" class="form-select" required>
                @foreach($obat as $o)
                    <option value="{{ $o->ID_OBAT }}">{{ $o->NAMA_OBAT }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="QTY" class="form-label">Qty:</label>
            <input type="number" name="QTY" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="ID_TRANSAKSI" class="form-label">Transaksi:</label>
            <select name="ID_TRANSAKSI" id="ID_TRANSAKSI" class="form-select" required>
                @foreach($transaksi as $t)
                    <option value="{{ $t->ID_TRANSAKSI }}">{{ $t->ID_TRANSAKSI }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
