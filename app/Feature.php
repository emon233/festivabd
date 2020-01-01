<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'package_id', 'text', 'serial'
    ];

    public function package()
    {
        return $this->belongsTo('App\Package');
    }
}
