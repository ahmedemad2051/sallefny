<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    protected $fillable=['address','latitude','longitude'];
}
