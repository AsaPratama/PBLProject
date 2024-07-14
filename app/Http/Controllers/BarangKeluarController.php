<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barangKeluar = BarangKeluar::all();    
        //return $barangKeluar;   
        return view('pages.barang_keluar.index', compact('barangKeluar'));
    }

    public function create()
    {
        $master_barang = Barang::all();
        return view('pages.barang_keluar.create', compact('master_barang'));
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

        BarangKeluar::create($request->all());

        return redirect()->route('barang_keluar.index')->with('success', 'Data created successfully');
    }

    public function edit($id)
    {
        $barang = BarangKeluar::findOrFail($id);
        return view('pages.barang_keluar.edit', compact('barang'));
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

        $barang = BarangKeluar::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang_keluar.index')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $barang = BarangKeluar::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang_keluar.index')->with('success', 'Data deleted successfully');
    }

    public function riwayat()
    {
        $barangKeluar = BarangKeluar::all();
        return view('pages.barang_keluar.riwayat', compact('barangKeluar'));
    }
}
