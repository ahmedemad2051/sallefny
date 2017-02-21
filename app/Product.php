<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends \NeoEloquent
{
    protected $fillable=['name','price','category_id'];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
