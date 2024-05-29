<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Models\Type;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index()
    {
//        take100 to prevent long load times with the js
        $rides = Ride::all()->take(100)->each(function ($ride) {
            $ride->parkLink = "/park/" . $ride->park_id;
        });

        $allRideNames = Type::all()->pluck('name');

        return view('rides', [
            'rides' => $rides,
            'allRideTypes' => $allRideNames
        ]);
    }
}
