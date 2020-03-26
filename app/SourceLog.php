<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SourceLog extends Model
{
    protected $fillable = ['area', 'price', 'date', 'source', 'source_id'];

    public function source()
    {
        return $this->belongsTo('App\Source');
    }
}
