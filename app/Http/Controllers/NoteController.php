<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = note::all();
        return view('pages.note.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.note.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        note::create($request->all());
        return redirect(url('home'))->with('success', 'Data gudang berhasil disimpan');
    }
    
   
    /**
     * Display the specified resource.
     */
    public function show(note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(note $note)
    {   
        $notes = note::find($note->id);
        return view('pages.note.edit', compact('notes'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $note)
    {
       $notes = note::find($note);
       $notes->update($request->all());
       return redirect('home'); 

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(note $note)
    { 
        $note->delete();
        return redirect('home'); 
    }
}
