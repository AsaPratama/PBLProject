<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('pages.barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|integer|unique:barang,kode_barang',
            'nama_barang' => 'required|string|max:20',
            'grade' => 'required|string|max:5',
            'stok' => 'required|integer',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Data created successfully');
    }

    public function edit($kode_barang)
    {
        $barang = Barang::findOrFail($kode_barang);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $kode_barang)
    {
        $request->validate([
            'kode_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:20',
            'grade' => 'required|string|max:5',
            'stok' => 'required|integer',
        ]);

        $barang = Barang::findOrFail($kode_barang);
        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Data updated successfully');
    }

    public function destroy($kode_barang)
    {
        $barang = Barang::findOrFail($kode_barang);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Data deleted successfully');
    }
}
