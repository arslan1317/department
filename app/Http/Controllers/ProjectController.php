<?php

namespace App\Http\Controllers;
use App\AboutUs;
use Illuminate\Http\Request;
use App\Admin\BasicSetting;

class ProjectController extends Controller
{
    // Pages Table
    // section_type = 7

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Our Projects';
        $lefttitle = '<li class="breadcrumb-item active"><a>Our Projects</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $project = AboutUs::where('section_type' , 7)->first();        
        return view('admin.project', compact('title', 'lefttitle', 'social_icons', 'basic_info', 'project'));
    }

    public function update(Request $request, $id){
        
    }
}
