<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkiResort extends Model
{
    protected $fillable = [
        'name',
        'weather',
        'temperature',
        'snow_cover',
    ];
}