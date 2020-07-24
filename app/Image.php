<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];
    protected $table = 'images';

    public function images()
    {
        return $this->belongsToMany('App\Product');
    }
}
