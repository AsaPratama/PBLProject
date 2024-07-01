<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Log::all();
        return response()->json($logs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_aktivitas' => 'required|string|max:10',
            'kode_barang' => 'required|integer|exists:barang,kode_barang',
            'nama_barang' => 'required|string|max:20|exists:barang,nama_barang',
            'qty' => 'required|integer',
            'user' => 'required|string|max:50',
        ]);

        $log = Log::create($validatedData);
        return response()->json($log, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kode_log
     * @return \Illuminate\Http\Response
     */
    public function show($kode_log)
    {
        $log = Log::findOrFail($kode_log);
        return response()->json($log);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $kode_log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_log)
    {
        $validatedData = $request->validate([
            'jenis_aktivitas' => 'string|max:10',
            'kode_barang' => 'integer|exists:barang,kode_barang',
            'nama_barang' => 'string|max:20|exists:barang,nama_barang',
            'qty' => 'integer',
            'user' => 'string|max:50',
        ]);

        $log = Log::findOrFail($kode_log);
        $log->update($validatedData);
        return response()->json($log);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kode_log
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_log)
    {
        $log = Log::findOrFail($kode_log);
        $log->delete();
        return response()->json(null, 204);
    }
}
