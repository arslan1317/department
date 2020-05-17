<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function subdepartment()
    {
        return $this->belongsTo('App\SubDepartment', 'sub_dep_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
