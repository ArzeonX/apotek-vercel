@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Daftar Supplier</h2>
        <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">Tambah Supplier</a>
        <table class="table table-bordered table-responsive-lg">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supplier as $item)
                    <tr>
                        <td>{{ $item->ID_SUPPLIER }}</td>
                        <td>{{ $item->NAMA_SUPPLIER }}</td>
                        <td>{{ $item->ALAMAT_SUPPLIER }}</td>
                        <td>{{ $item->TELEPON_SUPPLIER }}</td>
                        <td>{{ $item->EMAIL_SUPPLIER }}</td>
                        <td class="text-center">
                            <a href="{{ route('supplier.edit', $item->ID_SUPPLIER) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('supplier.destroy', $item->ID_SUPPLIER) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus supplier ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
