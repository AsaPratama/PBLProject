<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use PDF;

class LogMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = BarangMasuk::all();
        return view('pages.log.logMasuk', compact('barang'));
    }

    /**
     * Download PDF of Barang Keluar.
     */
    public function downloadpdf()
    {
        $barang = BarangMasuk::all();
        $pdf = PDF::loadView('pages.log.logbarangmasuk-pdf', compact('barang'));
        $pdf->setPaper('A4', 'portrait'); // Fix: Correct method name from setPape to setPaper
        return $pdf->stream('logbarangmasuk.pdf');
    }
}
