<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    public function sourcelog()
    {
        return $this->hasMany('App\SourceLog');
    }
}
