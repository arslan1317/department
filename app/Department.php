<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function subdepartment()
    {
        return $this->hasMany('App\SubDepartment');
    }
}
