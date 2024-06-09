<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $notes = note::all();
        return view('pages.app.dashboard', compact('notes'));
    }
}
