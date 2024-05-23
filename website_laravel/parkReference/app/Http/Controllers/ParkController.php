<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Models\Type;

class ParkController
{
    public function show($id)
    {

        $park = Park::findOrFail($id);

        $rides = $park->rides()->with('type')->get();

        $allRideNames = Type::all()->pluck('name');

        return view('park', [
            'park' => $park,
            'rides' => $rides,
            'allRideTypes' => $allRideNames
        ]);
    }
}
