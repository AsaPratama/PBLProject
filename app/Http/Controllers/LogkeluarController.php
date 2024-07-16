<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use PDF;

class LogkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = BarangKeluar::all();
        return view('pages.log.logKeluar', compact('barang'));
    }

    /**
     * Download PDF of Barang Keluar.
     */
    public function downloadpdf()
    {
        $barang = BarangKeluar::all();
        $pdf = PDF::loadView('pages.log.logbarangkeluar-pdf', compact('barang'));
        $pdf->setPaper('A4', 'portrait'); // Fix: Correct method name from setPape to setPaper
        return $pdf->stream('logbarangkeluar.pdf');
    }
}
