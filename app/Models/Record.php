<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function user() {
        return $this->belongsTo("App\Models\User");
    }
}