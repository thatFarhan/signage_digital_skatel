<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use App\Models\MapelModel;
use App\Models\GuruModel;
use App\Models\KalenderModel;
use Illuminate\Http\Request;

class SignageController extends Controller
{
    public function index()
    {
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

        $jadwalXI1 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 1)
        ->orderBy('kelas', 'asc')
        ->get();
        
        $jadwalXI2 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 2)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXI3 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 3)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXI4 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 4)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXI5 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 5)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXI6 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 6)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXI7 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 7)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXI8 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 8)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXI9 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 9)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXI10 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 11)
        ->where('jam_pelajaran', '=', 10)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII1 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 1)
        ->orderBy('kelas', 'asc')
        ->get();
        
        $jadwalXII2 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 2)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII3 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 3)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII4 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 4)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII5 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 5)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII6 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 6)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII7 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 7)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII8 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 8)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII9 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
        ->where('jam_pelajaran', '=', 9)
        ->orderBy('kelas', 'asc')
        ->get();

        $jadwalXII10 = JadwalModel::with('mapel')
        ->where('hari', '=', date('D'))
        ->where('angkatan', '=', 12)
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

        $events = KalenderModel::get();

        return view('jadwal', compact('jadwalX1', 'jadwalX2', 'jadwalX3', 'jadwalX4', 'jadwalX5', 'jadwalX6', 'jadwalX7', 'jadwalX8', 'jadwalX9', 'jadwalX10', 'jadwalXI1', 'jadwalXI2', 'jadwalXI3', 'jadwalXI4', 'jadwalXI5', 'jadwalXI6', 'jadwalXI7', 'jadwalXI8', 'jadwalXI9', 'jadwalXI10', 'jadwalXII1', 'jadwalXII2', 'jadwalXII3', 'jadwalXII4', 'jadwalXII5', 'jadwalXII6', 'jadwalXII7', 'jadwalXII8', 'jadwalXII9', 'jadwalXII10', 'guruToday', 'events'));
    }
}
