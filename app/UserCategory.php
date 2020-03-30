<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    
    protected $fillable = ['user_id', 'sub_dep_id'];

    public function subdepart(){
    	return $this->hasOne('App\SubDepartment', 'id');
    }
}
