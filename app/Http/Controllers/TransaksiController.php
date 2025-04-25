<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    // Menampilkan semua transaksi
    public function index()
    {
        $transaksi = Transaksi::with('pelanggan')->get(); // Mengambil semua transaksi beserta data pelanggan
        return view('transaksi.index', compact('transaksi'));
    }

    // Menampilkan form untuk menambahkan transaksi
    public function create()
    {
        $pelanggan = Pelanggan::all(); // Mengambil semua data pelanggan
        return view('transaksi.create', compact('pelanggan'));
    }

    // Menyimpan transaksi yang baru
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'ID_PELANGGAN' => 'required|exists:pelanggan,ID_PELANGGAN', // Pastikan pelanggan ada
            'TANGGAL_TRANSAKSI' => 'required|date',
            'TOTAL_HARGA' => 'required|numeric|min:0', // Total harga tidak boleh negatif
            'METODE_PEMBAYARAN' => 'required|string|max:50',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->route('transaksi.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Simpan data transaksi
        Transaksi::create([
            'ID_PELANGGAN' => $request->ID_PELANGGAN,
            'TANGGAL_TRANSAKSI' => $request->TANGGAL_TRANSAKSI,
            'TOTAL_HARGA' => $request->TOTAL_HARGA,
            'METODE_PEMBAYARAN' => $request->METODE_PEMBAYARAN,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit transaksi
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pelanggan = Pelanggan::all(); // Ambil data pelanggan untuk dropdown
        return view('transaksi.edit', compact('transaksi', 'pelanggan'));
    }

    // Mengupdate transaksi
    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'ID_PELANGGAN' => 'required|exists:pelanggan,ID_PELANGGAN',
            'TANGGAL_TRANSAKSI' => 'required|date',
            'TOTAL_HARGA' => 'required|numeric|min:0', // Total harga tidak boleh negatif
            'METODE_PEMBAYARAN' => 'required|string|max:50',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->route('transaksi.edit', $id)
                             ->withErrors($validator)
                             ->withInput();
        }

        // Update transaksi
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update([
            'ID_PELANGGAN' => $request->ID_PELANGGAN,
            'TANGGAL_TRANSAKSI' => $request->TANGGAL_TRANSAKSI,
            'TOTAL_HARGA' => $request->TOTAL_HARGA,
            'METODE_PEMBAYARAN' => $request->METODE_PEMBAYARAN,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui!');
    }

    // Menghapus transaksi
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}
