<?php

namespace App\Http\Controllers;

use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = GuruModel::get();
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        GuruModel::create([
            'nama_guru' => $request->nama_guru,
            'warna' => $request->warna,
        ]);
        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruModel $guruModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = GuruModel::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guru = GuruModel::findOrFail($id);
        $guru->update ([
            'nama_guru' => $request->nama_guru,
            'warna' => $request->warna
        ]);
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruModel $guruModel)
    {
        //
    }
}
