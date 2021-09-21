<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkiResort extends Model
{
    protected $table = 'ski_resorts';
    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at'
    // ];
    protected $fillable = [
        'name',
        'weather',
        'temperature',
        'snow_cover'
    ];
}