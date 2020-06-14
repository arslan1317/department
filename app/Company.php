<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $fillable = ['sub_id', 'name', 'website', 'telephone','details', 'image'];

    public function subdepartment()
    {
        return $this->belongsTo('App\SubDepartment', 'sub_id');
    }
}
