<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristSpot;

class TouristSpotController extends Controller
{
    public function index()
    {
        $touristSpots = TouristSpot::all();

        return view('tourist-spots.index', compact('touristSpots'));
    }

}
