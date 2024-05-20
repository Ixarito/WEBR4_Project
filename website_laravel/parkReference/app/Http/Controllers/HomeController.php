<?php

namespace App\Http\Controllers;

use App\Models\Park;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $randomPark = Park::all()->random();

        return view('home', [
            'park' => $randomPark
        ]);
    }
}
