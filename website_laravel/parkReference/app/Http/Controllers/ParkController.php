<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Models\Ride;

class ParkController
{
    public function show($id)
    {

        $park = Park::findOrFail($id);

        $rides = $park->rides()->with('type')->get();

        return view('park', [
            'park' => $park,
            'rides' => $rides
        ]);
    }
}
