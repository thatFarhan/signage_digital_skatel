<?php

namespace App\Http\Controllers;

use App\Models\MapelModel;
use App\Models\GuruModel;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = MapelModel::with('guru')->get();
        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guru = GuruModel::get();
        return view('mapel.create', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MapelModel::create([
            'nama_mapel' => $request->nama_mapel,
            'id_guru' => $request->id_guru,
        ]);
        return redirect()->route('mapel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MapelModel $mapelModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mapel = MapelModel::findOrFail($id);
        $guru = GuruModel::get();
        return view('mapel.edit', compact('mapel', 'guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mapel = MapelModel::findOrFail($id);
        $mapel->update ([
            'nama_mapel' => $request->nama_mapel,
            'id_guru' => $request->id_guru
        ]);
        return redirect()->route('mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapel = MapelModel::find($id);
        try {
            $mapel->delete();
            
            return redirect()->back();
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1451) {
                // Error code 1451 represents a foreign key constraint violation
                return redirect()->back()->with('warning', 'Tidak bisa dihapus karena ada jadwal yang terhubung.');
            } else {
                // Handle other exceptions
                return redirect()->back()->with('error', 'An error occurred while deleting the record.');
            }
        }
    }
}
