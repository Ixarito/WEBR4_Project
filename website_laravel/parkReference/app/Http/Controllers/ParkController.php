<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Models\Ride;

class ParkController
{
    public function show($id)
    {
        if (!is_numeric($id)) {
            abort(404);
        }

        $park = Park::findOrFail((int)$id);
//        TODO explain
        $rides = $park->rides()->with('type')->get();

        return view('park', [
            'park' => $park,
            'rides' => $rides
        ]);
    }
}
