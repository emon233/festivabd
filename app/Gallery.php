<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'category_id', 'album'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function galleryImages()
    {
        return $this->hasMany('App\GalleryImage');
    }
}
