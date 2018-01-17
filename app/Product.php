<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price', 'brand_id', 'weight', 'pulldate'];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
