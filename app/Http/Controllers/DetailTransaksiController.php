<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Pelanggan;
use App\Models\Obat;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        // Ambil semua data Detail Transaksi
        $detailTransaksi = DetailTransaksi::with(['pelanggan', 'obat', 'transaksi'])->get();
        return view('detailTransaksi.index', compact('detailTransaksi'));
    }

    public function create()
    {
        // Ambil data yang dibutuhkan untuk dropdown
        $pelanggan = Pelanggan::all();
        $obat = Obat::all();
        $transaksi = Transaksi::all();
        return view('detailTransaksi.create', compact('pelanggan', 'obat', 'transaksi'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'ID_PELANGGAN' => 'required|exists:pelanggan,ID_PELANGGAN',
            'ID_OBAT' => 'required|exists:obat,ID_OBAT',
            'QTY' => 'required|integer|min:1',
            'ID_TRANSAKSI' => 'required|exists:transaksi,ID_TRANSAKSI'
        ]);

        // Simpan data ke database
        DetailTransaksi::create($request->all());

        // Redirect ke halaman index
        return redirect()->route('detailTransaksi.index');
    }

    public function edit($id)
    {
        // Ambil data detail transaksi berdasarkan ID
        $detailTransaksi = DetailTransaksi::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $obat = Obat::all();
        $transaksi = Transaksi::all();
        return view('detailTransaksi.edit', compact('detailTransaksi', 'pelanggan', 'obat', 'transaksi'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'ID_PELANGGAN' => 'required|exists:pelanggan,ID_PELANGGAN',
            'ID_OBAT' => 'required|exists:obat,ID_OBAT',
            'QTY' => 'required|integer|min:1',
            'ID_TRANSAKSI' => 'required|exists:transaksi,ID_TRANSAKSI'
        ]);

        // Update data detail transaksi
        $detailTransaksi = DetailTransaksi::findOrFail($id);
        $detailTransaksi->update($request->all());

        // Redirect ke halaman index
        return redirect()->route('detailTransaksi.index');
    }

    public function destroy($id)
    {
        // Hapus data detail transaksi
        $detailTransaksi = DetailTransaksi::findOrFail($id);
        $detailTransaksi->delete();

        // Redirect ke halaman index
        return redirect()->route('detailTransaksi.index');
    }
}
