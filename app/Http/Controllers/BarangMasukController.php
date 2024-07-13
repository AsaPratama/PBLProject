<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuk = BarangMasuk::all();
        return view('pages.barang_masuk.index', compact('barangMasuk'));
    }

    public function create()
    {
        return view('pages.barang_masuk.create');
    }


    public function edit($id)
    {
        $barang = BarangMasuk::findOrFail($id);
        return view('pages.barang_masuk.edit', compact('barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'tanggal_waktu' => 'required|date',
            'grade' => 'required|string|max:255',
            'kuantitas' => 'required|integer',
            'user' => 'required|string|max:255',
        ]);

        BarangMasuk::create($request->all());

        return redirect()->route('barang_masuk.index')->with('success', 'Data created successfully');
    }

    public function destroy($id)
    {
        $barang = BarangMasuk::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang_masuk.index')->with('success', 'Data deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'tanggal_waktu' => 'required|date',
            'grade' => 'required|string|max:255',
            'kuantitas' => 'required|integer',
            'user' => 'required|string|max:255',
        ]);

        $barang = BarangMasuk::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang_masuk.index')->with('success', 'Data updated successfully');
    }

    public function riwayat()
    {
        $barangMasuk = BarangMasuk::all();
        return view('barang_masuk.riwayat', compact('barangMasuk'));
    }
}
