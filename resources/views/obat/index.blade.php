@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Data Obat</h2>
        <a href="{{ route('obat.create') }}" class="btn btn-primary mb-3">Tambah Obat</a>
        <table class="table table-bordered table-responsive-lg">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Obat</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Exp</th>
                    <th>Supplier</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obat as $o)
                    <tr>
                        <td>{{ $o->ID_OBAT }}</td>
                        <td>{{ $o->NAMA_OBAT }}</td>
                        <td>{{ $o->KATEGORI }}</td>
                        <td>{{ $o->JUMLAH_STOCK }}</td>
                        <td>{{ $o->HARGA }}</td>
                        <td>{{ $o->EXP }}</td>
                        <td>{{ $o->supplier->NAMA_SUPPLIER ?? '-' }}</td>
                        <td class="text-center">
                            <a href="{{ route('obat.edit', $o->ID_OBAT) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('obat.destroy', $o->ID_OBAT) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus obat ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
