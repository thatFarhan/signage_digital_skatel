<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\MapelModel;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwalXA = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'A')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXB = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'B')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXC = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'C')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXD = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'D')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXE = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'E')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXF = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'F')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXG = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'G')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        return view('jadwal', compact('jadwalXA', 'jadwalXB', 'jadwalXC', 'jadwalXD', 'jadwalXE', 'jadwalXF', 'jadwalXG'));
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
