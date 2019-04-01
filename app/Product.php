<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $hidden = array('category_id');

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
