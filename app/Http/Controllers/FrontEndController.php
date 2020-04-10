<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use App\Department;
use App\SubDepartment;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $slider_lower = BasicSetting::where('section_type', 4)->first();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $info_box = BasicSetting::where('section_type', 5)->get();
        $all_department = Department::all();
        return view('welcome',compact('social_icons', 'subdeparment', 'slider_lower', 'info_box', 'all_department'));
    }
}
