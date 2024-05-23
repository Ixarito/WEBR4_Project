<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $table = "destinations";
    protected $keyType = "string";
    protected $primaryKey = "id";

//    public $timestamps = false;


    public function getImage()
    {
        $park = $this->hasMany(Park::class)->inRandomOrder()->first();
        return $park?->image;
    }

    public function parks()
    {
        return $this->hasMany(Park::class);
    }
}
