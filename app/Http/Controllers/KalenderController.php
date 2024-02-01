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
    public function show(KalenderModel $kalenderModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KalenderModel $kalenderModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KalenderModel $kalenderModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KalenderModel $kalenderModel)
    {
        //
    }
}
