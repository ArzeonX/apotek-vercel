@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Edit Supplier</h2>
        <form action="{{ route('supplier.update', $supplier->ID_SUPPLIER) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="NAMA_SUPPLIER">Nama Supplier</label>
                <input type="text" class="form-control" id="NAMA_SUPPLIER" name="NAMA_SUPPLIER" value="{{ $supplier->NAMA_SUPPLIER }}" required>
            </div>
            <div class="form-group">
                <label for="ALAMAT_SUPPLIER">Alamat</label>
                <input type="text" class="form-control" id="ALAMAT_SUPPLIER" name="ALAMAT_SUPPLIER" value="{{ $supplier->ALAMAT_SUPPLIER }}">
            </div>
            <div class="form-group">
                <label for="TELEPON_SUPPLIER">Telepon</label>
                <input type="text" class="form-control" id="TELEPON_SUPPLIER" name="TELEPON_SUPPLIER" value="{{ $supplier->TELEPON_SUPPLIER }}">
            </div>
            <div class="form-group">
                <label for="EMAIL_SUPPLIER">Email</label>
                <input type="email" class="form-control" id="EMAIL_SUPPLIER" name="EMAIL_SUPPLIER" value="{{ $supplier->EMAIL_SUPPLIER }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
