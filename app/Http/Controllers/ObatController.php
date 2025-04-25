<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::with('supplier')->get();
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        return view('obat.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        Obat::create($request->all());
        return redirect()->route('obat.index');
    }

    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        $suppliers = Supplier::all();
        return view('obat.edit', compact('obat', 'suppliers'));
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);
        $obat->update($request->all());
        return redirect()->route('obat.index');
    }

    public function destroy($id)
    {
        Obat::destroy($id);
        return redirect()->route('obat.index');
    }
}
