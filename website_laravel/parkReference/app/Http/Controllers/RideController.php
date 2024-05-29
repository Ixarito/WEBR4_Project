<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index()
    {
        $rides = Ride::all()->each(function ($ride) {
            $ride->parkLink = "/park/" . $ride->park_id;
        });

        return view('rides', [
            'rides' => $rides
        ]);
    }
}
