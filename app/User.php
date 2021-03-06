<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','birthdate','gender','affiliation','photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function categories()
    {
        return $this->hasMany('App\Category');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password']=bcrypt($password);
    }


    public function setPhotoAttribute($file)
    {
        $this->attributes['photo']=$file->getClientOriginalName();
    }
}
