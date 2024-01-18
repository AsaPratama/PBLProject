<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGudangRequest;
use App\Http\Requests\UpdateGudangRequest;
use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $gudangs = Gudang::query()
            ->when($request->input('gudang'), function ($query, $gudang) {
                return $query->where('gudang', 'like', '%' . $gudang . '%');
            })
            ->select('id', 'gudang', 'jenis_gudang', 'luas', 'volume', 'keterangan', 'created_at')
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('pages.gudang.index', compact('gudangs'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGudangRequest $request)
    {
        $validatedData = $request->validated();

        Gudang::create($validatedData);

        return redirect(route('gudang.index'))->with('success', 'Data gudang berhasil disimpan');
    }

    public function create()
    {
        return view('pages.gudang.create');
    }

    public function edit(Gudang $gudang)
    {
        return view('pages.gudang.edit')->with('gudang', $gudang);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGudangRequest $request, Gudang $gudang)
    {
        $validatedData = $request->validated();

        $gudang->update($validatedData);

        return redirect()->route('gudang.index')->with('success', 'Edit gudang berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gudang $gudang)
    {
        $gudang->delete();

        return redirect()->route('gudang.index')->with('success', 'Hapus gudang berhasil');
    }
}
