<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    public function sourcelog()
    {
        return $this->hasMany('App\SourceLog', 'source_id');
    }

    public function subdepartment()
    {
        return $this->belongsTo('App\SubDepartment', 'sub_dep_id');
    }
}
