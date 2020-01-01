<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name', 'rate', 'serial'
    ];

    public function features()
    {
        return $this->hasMany('App\Feature')->orderBy('serial', 'asc');
    }
}
