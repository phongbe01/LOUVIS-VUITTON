<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];
    protected $table = 'suppliers';

    public function products()
    {
        return $this->hasMany('App\Product', 'supplierID', 'id');
    }
}
