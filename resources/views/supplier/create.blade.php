@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Tambah Supplier</h2>
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="NAMA_SUPPLIER">Nama Supplier</label>
                <input type="text" class="form-control" id="NAMA_SUPPLIER" name="NAMA_SUPPLIER" required>
            </div>
            <div class="form-group">
                <label for="ALAMAT_SUPPLIER">Alamat</label>
                <input type="text" class="form-control" id="ALAMAT_SUPPLIER" name="ALAMAT_SUPPLIER">
            </div>
            <div class="form-group">
                <label for="TELEPON_SUPPLIER">Telepon</label>
                <input type="text" class="form-control" id="TELEPON_SUPPLIER" name="TELEPON_SUPPLIER">
            </div>
            <div class="form-group">
                <label for="EMAIL_SUPPLIER">Email</label>
                <input type="email" class="form-control" id="EMAIL_SUPPLIER" name="EMAIL_SUPPLIER">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
