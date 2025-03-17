<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BusNavigation;
use Illuminate\Http\Request;

class BusNavigationController extends Controller
{
    public function index()
    {

        $buses = BusNavigation::with('stops')->get();

 
        $buses->each(function ($bus) {

            $bus->dotsStart = json_decode($bus->dotsStart, true);
            $bus->dotsEnd = json_decode($bus->dotsEnd, true);

            $bus->stops->each(function ($stop) {
                $stop->coordinate = json_decode($stop->coordinate, true);
            });
        });


        return response()->json($buses, 200);
    }
}

