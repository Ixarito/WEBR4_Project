<?php

namespace App\Http\Controllers;

use App\Models\Park;
use Illuminate\Support\Facades\DB;

class searchApiController extends Controller
{
    public function index($input)
    {
        return DB::table('parks')->where(DB::raw('LOWER(name)'), 'like', '%'.strtolower($input).'%')->get();
    }
}
