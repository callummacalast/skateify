<?php

namespace App\Http\Controllers;

use App\Models\SkateSpot;
use Illuminate\Http\Request;

class SkateSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $skate_spots = SkateSpot::all();
        return view('skate_spots.index', compact('skate_spots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkateSpot  $skateSpot
     * @return \Illuminate\Http\Response
     */
    public function show(SkateSpot $skateSpot)
    {
        return view('skate_spots.show', compact('skateSpot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkateSpot  $skateSpot
     * @return \Illuminate\Http\Response
     */
    public function edit(SkateSpot $skateSpot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkateSpot  $skateSpot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkateSpot $skateSpot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkateSpot  $skateSpot
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkateSpot $skateSpot)
    {
        //
    }
}
