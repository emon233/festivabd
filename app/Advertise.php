<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $fillable = [
        'title', 'footer', 'image', 'serial'
    ];
}
