@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Transaksi</h1>
        <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Harga</th>
                    <th>Metode Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $trans)
                    <tr>
                        <td>{{ $trans->ID_TRANSAKSI }}</td>
                        <td>{{ $trans->pelanggan->NAMA_PELANGGAN }}</td>
                        <td>{{ $trans->TANGGAL_TRANSAKSI }}</td>
                        <td>{{ number_format($trans->TOTAL_HARGA, 0, ',', '.') }}</td> <!-- Format harga agar lebih rapi -->
                        <td>{{ $trans->METODE_PEMBAYARAN }}</td>
                        <td>
                            <a href="{{ route('transaksi.edit', $trans->ID_TRANSAKSI) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('transaksi.destroy', $trans->ID_TRANSAKSI) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
