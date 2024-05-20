<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public function getImage()
    {

        $park = $this->hasMany(Park::class)->inRandomOrder()->first();
        return $park?->image;
    }
}
