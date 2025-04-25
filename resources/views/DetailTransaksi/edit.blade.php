@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Update Detail Transaksi</h2>

    <form action="{{ route('detailTransaksi.update', $detailTransaksi->ID_PEMBELIAN) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="ID_PELANGGAN" class="form-label">Pelanggan</label>
            <select name="ID_PELANGGAN" id="ID_PELANGGAN" class="form-control">
                @foreach ($pelanggan as $p)
                    <option value="{{ $p->ID_PELANGGAN }}" 
                        {{ $p->ID_PELANGGAN == $detailTransaksi->ID_PELANGGAN ? 'selected' : '' }}>
                        {{ $p->NAMA_PELANGGAN }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ID_OBAT" class="form-label">Obat</label>
            <select name="ID_OBAT" id="ID_OBAT" class="form-control">
                @foreach ($obat as $o)
                    <option value="{{ $o->ID_OBAT }}" 
                        {{ $o->ID_OBAT == $detailTransaksi->ID_OBAT ? 'selected' : '' }}>
                        {{ $o->NAMA_OBAT }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="QTY" class="form-label">Jumlah</label>
            <input type="number" name="QTY" id="QTY" value="{{ $detailTransaksi->QTY }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="ID_TRANSAKSI" class="form-label">Transaksi</label>
            <select name="ID_TRANSAKSI" id="ID_TRANSAKSI" class="form-control">
                @foreach ($transaksi as $t)
                    <option value="{{ $t->ID_TRANSAKSI }}" 
                        {{ $t->ID_TRANSAKSI == $detailTransaksi->ID_TRANSAKSI ? 'selected' : '' }}>
                        {{ $t->ID_TRANSAKSI }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
