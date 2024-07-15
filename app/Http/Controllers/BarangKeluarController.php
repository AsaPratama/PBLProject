<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barangKeluar = Barang::all();    
        return view('pages.barang_keluar.index', compact('barangKeluar'));
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
        $item_keluar= Barang::find($id);
        return view('pages.barang_keluar.edit', compact('item_keluar'));

    }

    public function kurang(Request $request, $id )
    {

       
       
         // Validasi input dari pengguna
         $request->validate([
            'stok' => 'required|integer|min:1',
        ]);

        // Ambil item berdasarkan ID
        $jumlah_keluar = Barang::find($id);

        if (!$jumlah_keluar) {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }

        // Kurangi stok barang
        $quantityToReduce = $request->input('keluar');
        if ($jumlah_keluar->stok < $quantityToReduce) {
            return response()->json(['message' => 'Stok barang tidak mencukupi'], 400);
        }

        $jumlah_keluar->stok -= $quantityToReduce;
        $jumlah_keluar->save();

        $validatedData = $request->validate([
            'kode_barang' => 'required|integer',
            'nama_barang' => 'required|string',
            'grade' => 'required|string',
            'stok' => 'required|integer',
            'keluar' => 'required|integer'
        ]);
        $validatedData['stok_akhir'] = $validatedData['stok'] - $request->input('keluar');

        //return $validatedData;

       
        $Simpan = BarangKeluar::create($validatedData);

       
        return redirect()->route('barang_keluar.index')->with('success', 'Item created successfully.');
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
