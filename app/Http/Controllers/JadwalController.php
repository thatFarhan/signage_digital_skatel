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
        $jadwal = JadwalModel::with('mapel')->get();
        return view('jadwal.index', compact('jadwal'));
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
