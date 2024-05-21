<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{

    public function index()
    {

        $destinations = Destination::all()->each(function ($destination) {
            $destination->image = $destination->getImage();
        });

        return view('search', [
            'destinations' => $destinations
        ]);
    }

    public function show($id)
    {
        if (!is_numeric($id)) {
            abort(404);
        }

        $destination = Destination::findOrFail((int)$id);
        $parks = $destination->parks;

        return view('destination', [
            'destination' => $destination,
            'parks' => $parks
        ]);
    }
}