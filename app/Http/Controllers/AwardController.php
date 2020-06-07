<?php

namespace App\Http\Controllers;
use App\AboutUs;
use Illuminate\Http\Request;
use App\Admin\BasicSetting;

class AwardController extends Controller
{
    // Pages Table
    // section_type = 8

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Awards & Achievements';
        $lefttitle = '<li class="breadcrumb-item active"><a>Awards & Achievements</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $award = AboutUs::where('section_type' , 8)->first();        
        return view('admin.award', compact('title', 'lefttitle', 'social_icons', 'basic_info', 'award'));
    }
}
