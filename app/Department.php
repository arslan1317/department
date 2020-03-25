<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function subdepartment()
    {
        return $this->hasMany('App\SubDepartment')->orderBy('id', 'desc');
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
