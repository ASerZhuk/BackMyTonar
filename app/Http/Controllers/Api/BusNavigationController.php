<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BusNavigation;
use Illuminate\Http\Request;

class BusNavigationController extends Controller
{
    public function index()
    {
        $bus = BusNavigation::all();
        return response()->json($bus, 200);
    }


}

