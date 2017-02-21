<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \NeoEloquent
{
    protected $fillable=['name','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
