<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

//    TODO explain
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
