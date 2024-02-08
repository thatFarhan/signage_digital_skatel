<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\MapelModel;
use App\Models\GuruModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function edit(string $kelasAngkatan)
    {
        $angkatan = substr($kelasAngkatan, 0, 2);
        $kelas = substr($kelasAngkatan, 2, 1);

        $jadwal = JadwalModel::with('mapel')
        ->where('angkatan', '=', $angkatan)
        ->where('kelas', '=', $kelas)
        ->orderByRaw('FIELD(hari, "Mon", "Tue", "Wed", "Thu", "Fri")')
        ->orderBy('jam_pelajaran', 'asc')
        ->get();

        $mapel = MapelModel::with('guru')->get();

        return view('jadwal.edit', compact('jadwal', 'mapel'))->with('kelasAngkatan', $kelasAngkatan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kelasAngkatan)
    {
        $angkatan = substr($kelasAngkatan, 0, 2);
        $kelas = substr($kelasAngkatan, 2, 1);

        $jadwalMon = JadwalModel::where('angkatan', '=', $angkatan)
        ->where('kelas', '=', $kelas)
        ->where('hari', '=', 'Mon');

        $jadwalTue = JadwalModel::where('angkatan', '=', $angkatan)
        ->where('kelas', '=', $kelas)
        ->where('hari', '=', 'Tue');

        $jadwalWed = JadwalModel::where('angkatan', '=', $angkatan)
        ->where('kelas', '=', $kelas)
        ->where('hari', '=', 'Wed');

        $jadwalThu = JadwalModel::where('angkatan', '=', $angkatan)
        ->where('kelas', '=', $kelas)
        ->where('hari', '=', 'Thu');

        $jadwalFri = JadwalModel::where('angkatan', '=', $angkatan)
        ->where('kelas', '=', $kelas)
        ->where('hari', '=', 'Fri');

        DB::transaction(function () use($jadwalMon, $request) {
            for ($i = 1; $i <= 10; $i++) {
                $jadwalMonClone = clone $jadwalMon;
                $jadwalMonClone->where('jam_pelajaran', '=', $i)->update([
                    'id_mapel' => $request->$i
                ]);
            }
        });

        DB::transaction(function () use($jadwalTue, $request) {
            for ($i = 1; $i <= 10; $i++) {
                $selectBox = $i + 10;
                $jadwalTueClone = clone $jadwalTue;
                $jadwalTueClone->where('jam_pelajaran', '=', $i)->update([
                    'id_mapel' => $request->$selectBox
                ]);
            }
        });

        DB::transaction(function () use($jadwalWed, $request) {
            for ($i = 1; $i <= 10; $i++) {
                $selectBox = $i + 20;
                $jadwalWedClone = clone $jadwalWed;
                $jadwalWedClone->where('jam_pelajaran', '=', $i)->update([
                    'id_mapel' => $request->$selectBox
                ]);
            }
        });

        DB::transaction(function () use($jadwalThu, $request) {
            for ($i = 1; $i <= 10; $i++) {
                $selectBox = $i + 30;
                $jadwalThuClone = clone $jadwalThu;
                $jadwalThuClone->where('jam_pelajaran', '=', $i)->update([
                    'id_mapel' => $request->$selectBox
                ]);
            }
        });

        DB::transaction(function () use($jadwalFri, $request) {
            for ($i = 1; $i <= 10; $i++) {
                $selectBox = $i + 40;
                $jadwalFriClone = clone $jadwalFri;
                $jadwalFriClone->where('jam_pelajaran', '=', $i)->update([
                    'id_mapel' => $request->$selectBox
                ]);
            }
        });

        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalModel $jadwalModel)
    {
        //
    }
}
