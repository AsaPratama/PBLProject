<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuk = Barang::all();    
        return view('pages.barang_masuk.index', compact('barangMasuk'));
    }

    public function create()
    {
       //return $kode_barang; 
    }

    public function store(Request $request)
    {
        
         }

    public function edit($id)
    {
        $item_masuk= Barang::find($id);
        return view('pages.barang_masuk.edit', compact('item_masuk'));
    }

    public function tambah(Request $request, $id )
    {

       
       
         // Validasi input dari pengguna
         $request->validate([
            'stok' => 'required|integer|min:1',
        ]);

        // Ambil item berdasarkan ID
        $jumlah_masuk = Barang::find($id);

        if (!$jumlah_masuk) {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }

        // Tambah stok barang
        $quantityToReduce = $request->input('masuk');
        
        $jumlah_masuk->stok += $quantityToReduce;
        $jumlah_masuk->save();

        $validatedData = $request->validate([
            'kode_barang' => 'required|integer',
            'nama_barang' => 'required|string',
            'grade' => 'required|string',
            'stok' => 'required|integer',
            'masuk' => 'required|integer'
        ]);
        $validatedData['stok_akhir'] = $validatedData['stok'] + $request->input('masuk');

        //return $validatedData;

       
        $Simpan = BarangMasuk::create($validatedData);

       
        return redirect()->route('barang_masuk.index')->with('success', 'Item created successfully.');
    }
    

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
       
    }

    public function riwayat()
    {
    }
}
