<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Menampilkan daftar supplier
    public function index()
    {
        // Ambil semua data supplier dari database
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    // Menampilkan form untuk membuat supplier baru
    public function create()
    {
        // Tampilkan form untuk menambah supplier
        return view('supplier.create');
    }

    // Menyimpan supplier baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'NAMA_SUPPLIER' => 'required|string|max:100',
            'ALAMAT_SUPPLIER' => 'nullable|string|max:255',
            'TELEPON_SUPPLIER' => 'nullable|string|max:20',
            'EMAIL_SUPPLIER' => 'nullable|email|max:100',
        ]);

        // Simpan data supplier baru
        Supplier::create($request->all());

        // Redirect ke halaman daftar supplier
        return redirect()->route('supplier.index');
    }

    // Menampilkan form untuk edit supplier
    public function edit($id)
    {
        // Ambil data supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }

    // Mengupdate data supplier
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'NAMA_SUPPLIER' => 'required|string|max:100',
            'ALAMAT_SUPPLIER' => 'nullable|string|max:255',
            'TELEPON_SUPPLIER' => 'nullable|string|max:20',
            'EMAIL_SUPPLIER' => 'nullable|email|max:100',
        ]);

        // Cari supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);

        // Update data supplier
        $supplier->update($request->all());

        // Redirect ke halaman daftar supplier
        return redirect()->route('supplier.index');
    }

    // Menghapus data supplier
    public function destroy($id)
    {
        // Cari supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);

        // Hapus data supplier
        $supplier->delete();

        // Redirect ke halaman daftar supplier
        return redirect()->route('supplier.index');
    }
}
