<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SkateSpot;
use Illuminate\Http\Request;

class AdminSkateSpotController extends Controller
{
    public function index()
    {
        $skate_spots = SkateSpot::all();
        return view('admin.skate-spots.index', compact('skate_spots'));
    }

    public function create()
    {
        return view('admin.skate-spots.create');
    }
}
