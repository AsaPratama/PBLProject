<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $schedules = Schedule::when($request->input('subject_id'), function ($query, $subjectId) {
                return $query->where('subject_id', $subjectId);
            })
            ->when($request->input('hari'), function ($query, $hari) {
                return $query->where('hari', 'like', '%' . $hari . '%');
            })
            ->when($request->input('jam_mulai'), function ($query, $jamMulai) {
                return $query->where('jam_mulai', 'like', '%' . $jamMulai . '%');
            })
            ->when($request->input('jam_selesai'), function ($query, $jamSelesai) {
                return $query->where('jam_selesai', 'like', '%' . $jamSelesai . '%');
            })
            ->when($request->input('ruangan'), function ($query, $ruangan) {
                return $query->where('ruangan', 'like', '%' . $ruangan . '%');
            })
            ->when($request->input('kode_absensi'), function ($query, $kodeAbsensi) {
                return $query->where('kode_absensi', 'like', '%' . $kodeAbsensi . '%');
            })
            ->when($request->input('tahun_akademik'), function ($query, $tahunAkademik) {
                return $query->where('tahun_akademik', 'like', '%' . $tahunAkademik . '%');
            })
            ->when($request->input('semester'), function ($query, $semester) {
                return $query->where('semester', 'like', '%' . $semester . '%');
            })
            ->select('id', 'subject_id', 'hari', 'jam_mulai', 'jam_selesai', 'ruangan', 'kode_absensi', 'tahun_akademik', 'semester', 'created_by', 'updated_by', 'deleted_by', 'created_at', 'updated_at')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('pages.schedule.index', compact('schedules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        $validatedData = $request->validated();

        Schedule::create($validatedData);

        return redirect(route('schedule.index'))->with('success', 'Data jadwal berhasil disimpan');
    }

    public function create()
    {
        // You can modify this function if needed
        return view('pages.schedule.create');
    }

    public function edit(Schedule $schedule)
    {
        return view('pages.schedule.edit')->with('schedule', $schedule);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);

        return view('pages.schedule.show')->with('schedule', $schedule);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $validatedData = $request->validated();

        $schedule->update($validatedData);

        return redirect()->route('schedule.index')->with('success', 'Edit jadwal berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedule.index')->with('success', 'Hapus jadwal berhasil');
    }
}
