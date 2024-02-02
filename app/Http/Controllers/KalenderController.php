<?php

namespace App\Http\Controllers;

use App\Models\KalenderModel;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kalender = KalenderModel::get();
        return view('kalender.index', compact('kalender'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kalender.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        KalenderModel::create([
            'info_akademik' => $request->info_akademik,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai
        ]);
        return redirect()->route('kalender.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(KalenderModel $kalenderModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kalender = KalenderModel::findOrFail($id);
        return view('kalender.edit', compact('kalender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kalender = KalenderModel::findOrFail($id);
        $kalender->update([
            'info_akademik' => $request->info_akademik,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai
        ]);
        return redirect()->route('kalender.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kalender = KalenderModel::find($id);
        $kalender->delete();

        return redirect()->back();
    }
}
