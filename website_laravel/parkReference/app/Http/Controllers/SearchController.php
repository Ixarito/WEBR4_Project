<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Park;
use Illuminate\Http\Request;

class SearchController extends Controller
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
}
