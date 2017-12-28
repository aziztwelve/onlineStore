<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price'];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
