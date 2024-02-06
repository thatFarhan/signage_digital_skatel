<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\MapelModel;
use App\Models\GuruModel;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwalXA = JadwalModel::with('mapel')
        ->where('angkatan', '=', 10)
        ->where('kelas', '=', 'A')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXB = JadwalModel::with('mapel')
        ->where('angkatan', '=', 10)
        ->where('kelas', '=', 'B')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXC = JadwalModel::with('mapel')
        ->where('angkatan', '=', 10)
        ->where('kelas', '=', 'C')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXD = JadwalModel::with('mapel')
        ->where('angkatan', '=', 10)
        ->where('kelas', '=', 'D')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXE = JadwalModel::with('mapel')
        ->where('angkatan', '=', 10)
        ->where('kelas', '=', 'E')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXF = JadwalModel::with('mapel')
        ->where('angkatan', '=', 10)
        ->where('kelas', '=', 'F')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXG = JadwalModel::with('mapel')
        ->where('angkatan', '=', 10)
        ->where('kelas', '=', 'G')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIA = JadwalModel::with('mapel')
        ->where('angkatan', '=', 11)
        ->where('kelas', '=', 'A')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIB = JadwalModel::with('mapel')
        ->where('angkatan', '=', 11)
        ->where('kelas', '=', 'B')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIC = JadwalModel::with('mapel')
        ->where('angkatan', '=', 11)
        ->where('kelas', '=', 'C')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXID = JadwalModel::with('mapel')
        ->where('angkatan', '=', 11)
        ->where('kelas', '=', 'D')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIE = JadwalModel::with('mapel')
        ->where('angkatan', '=', 11)
        ->where('kelas', '=', 'E')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIF = JadwalModel::with('mapel')
        ->where('angkatan', '=', 11)
        ->where('kelas', '=', 'F')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIG = JadwalModel::with('mapel')
        ->where('angkatan', '=', 11)
        ->where('kelas', '=', 'G')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIIA = JadwalModel::with('mapel')
        ->where('angkatan', '=', 12)
        ->where('kelas', '=', 'A')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIIB = JadwalModel::with('mapel')
        ->where('angkatan', '=', 12)
        ->where('kelas', '=', 'B')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIIC = JadwalModel::with('mapel')
        ->where('angkatan', '=', 12)
        ->where('kelas', '=', 'C')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIID = JadwalModel::with('mapel')
        ->where('angkatan', '=', 12)
        ->where('kelas', '=', 'D')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIIE = JadwalModel::with('mapel')
        ->where('angkatan', '=', 12)
        ->where('kelas', '=', 'E')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIIF = JadwalModel::with('mapel')
        ->where('angkatan', '=', 12)
        ->where('kelas', '=', 'F')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        $jadwalXIIG = JadwalModel::with('mapel')
        ->where('angkatan', '=', 12)
        ->where('kelas', '=', 'G')
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();
        
        return view('jadwal.index', compact('jadwalXA', 'jadwalXB', 'jadwalXC', 'jadwalXD', 'jadwalXE', 'jadwalXF', 'jadwalXG', 'jadwalXIA', 'jadwalXIB', 'jadwalXIC', 'jadwalXID', 'jadwalXIE', 'jadwalXIF', 'jadwalXIG', 'jadwalXIIA', 'jadwalXIIB', 'jadwalXIIC', 'jadwalXIID', 'jadwalXIIE', 'jadwalXIIF', 'jadwalXIIG'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalModel $jadwalModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalModel $jadwalModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalModel $jadwalModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalModel $jadwalModel)
    {
        //
    }
}
