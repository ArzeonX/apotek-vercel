@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Detail Transaksi</h2>
    <a href="{{ route('detailTransaksi.create') }}" class="btn btn-primary mb-3">Tambah Detail Transaksi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Pelanggan</th>
                <th>Obat</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detailTransaksi as $dt)
                <tr>
                    <td>{{ $dt->ID_PEMBELIAN }}</td>
                    <td>{{ $dt->pelanggan->NAMA_PELANGGAN }}</td>
                    <td>{{ $dt->obat->NAMA_OBAT }}</td>
                    <td>{{ $dt->QTY }}</td>
                    <td>{{ $dt->obat->HARGA * $dt->QTY }}</td>
                    <td>
                        <a href="{{ route('detailTransaksi.edit', $dt->ID_PEMBELIAN) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('detailTransaksi.destroy', $dt->ID_PEMBELIAN) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
