<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Record extends Model
{   
    protected $fillable = [
        'user_id',
        'date',
        'ski_resort',
        'body',
        'image_file_name'
    ];

    public function user() {
        return $this->belongsTo("App\Models\User");
    }

    public function getImageFullPathAttribute() {
        if ($this->image_file_name) {
            return "storage/img/".$this->image_file_name;
        } else {
            return "img/noimage.jpg";
        } 
    }
}