<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use App\SubDepartment;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $slider_lower = BasicSetting::where('section_type', 4)->first();
        $subdeparment = SubDepartment::where('department_id', 1)->take(4)->get();
        $info_box = BasicSetting::where('section_type', 5)->get();
        return view('welcome',compact('social_icons', 'subdeparment', 'slider_lower', 'info_box'));
    }
}
