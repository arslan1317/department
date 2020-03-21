<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
	protected $fillable = ['department_id', 'name', 'website', 'address', 'telephone', 'fax'];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function user_category()
    {
        return $this->belongsTo('App\UserCategory', 'sub_dep_id');
    }
}
