<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'pages';
    protected $fillable = ['banner_image', 'heading', 'details', 'section_type'];
}
