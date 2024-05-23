<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;
    protected $table = "rides";
    protected $keyType = "int";
    protected $primaryKey = "id";

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
