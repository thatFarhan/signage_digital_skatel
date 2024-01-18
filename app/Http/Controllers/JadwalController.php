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
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'A')
        ->where('angkatan', '=', 10)
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXB = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'B')
        ->where('angkatan', '=', 10)
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXC = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'C')
        ->where('angkatan', '=', 10)
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXD = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'D')
        ->where('angkatan', '=', 10)
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXE = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'E')
        ->where('angkatan', '=', 10)
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXF = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'F')
        ->where('angkatan', '=', 10)
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalXG = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('kelas', '=', 'G')
        ->where('angkatan', '=', 10)
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $jadwalX1 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 1)
        ->orderBy('kelas', 'asc')
        ->get();
        
        $jadwalX2 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 2)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalX3 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 3)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalX4 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 4)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalX5 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 5)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalX6 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 6)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalX7 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 7)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalX8 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 8)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalX9 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 9)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalX10 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 10)
        ->where('jam_pelajaran', '=', 10)
        ->orderBy('kelas', 'asc')
        ->get();

        $guruToday = GuruModel::whereIn('id_guru', function($query){
            $query->select('id_guru')
            ->from(with(new MapelModel)->getTable())
            ->whereIn('id_mapel', function($query){
                $query->select('id_mapel')
                ->from(with(new JadwalModel)->getTable())
                ->where('hari', '=', date('D'));
            });
        })->get();

        return view('jadwal', compact('jadwalX1', 'jadwalX2', 'jadwalX3', 'jadwalX4', 'jadwalX5', 'jadwalX6', 'jadwalX7', 'jadwalX8', 'jadwalX9', 'jadwalX10', 'guruToday'));
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
