@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Daftar Pelanggan</h2>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
        <table class="table table-bordered table-responsive-lg">
            <thead>
                <tr>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 30%;">Nama</th>
                    <th style="width: 20%;">Jenis Kelamin</th>
                    <th style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->ID_PELANGGAN }}</td>
                        <td>{{ $item->NAMA_PELANGGAN }}</td>
                        <td>{{ $item->JENIS_KELAMIN }}</td>
                        <td class="text-center">
                            <a href="{{ route('pelanggan.edit', $item->ID_PELANGGAN) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pelanggan.destroy', $item->ID_PELANGGAN) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
