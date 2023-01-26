<?php

namespace App\Http\Controllers;

use App\Models\Skater;
use App\Models\User;
use Illuminate\Http\Request;

class SkatersController extends Controller
{
    public function index(Skater $skater)
    {
        $skater = User::with('skater')->find(1);
        return view('skaters.index', compact('skater'));
    }
}
