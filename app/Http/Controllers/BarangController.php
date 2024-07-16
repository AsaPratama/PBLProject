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
        return view('pages.barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'tanggal_waktu' => 'required|date',
            'grade' => 'required|string|max:255',
            'stok' => 'required|integer'
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Data created successfully');
    }

    public function edit($kode_barang)
    {
        $barang = Barang::findOrFail($kode_barang);
        return view('pages.barang.edit', compact('barang'));
    }

    public function update(Request $request, $kode_barang)
    {
        $barangs = Barang::find($kode_barang);
        $barangs->update($request->all());
        return redirect('home'); 
        }

    public function destroy($kode_barang)
    {
        $barang = Barang::findOrFail($kode_barang);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Data deleted successfully');
    }
}
