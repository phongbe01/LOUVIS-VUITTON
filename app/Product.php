<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $table = 'products';

    public function category()
    {
        return $this->belongsToMany('App\Category');
    }

    public function supplier()
    {
        return $this->belongsToMany('App\Supplier');
    }

    public function images()
    {
        return $this->hasMany('App\Image', 'productID','id');
    }
}
