<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;

    protected $table = "parks";
    protected $keyType = "string";
    protected $primaryKey = "id";

    public function rides()
    {
        return $this->hasMany(Ride::class);
    }
}
