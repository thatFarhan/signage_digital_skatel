<?php

namespace App\Http\Controllers;

use App\Models\MapelModel;
use Illuminate\Http\Request;

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
    public function show(MapelModel $mapelModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MapelModel $mapelModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MapelModel $mapelModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MapelModel $mapelModel)
    {
        //
    }
}
