<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use Illuminate\Http\Request;
use App\AboutUs;

class BusinessController extends Controller
{
    // Start Note
    // Pages Table For Business is section_type = 2
    // End Note

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Business Pages';
        $lefttitle = '<li class="breadcrumb-item active"><a>Business Pages</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        return view('admin.business', compact('title', 'lefttitle', 'social_icons', 'basic_info'));
    }

    public function all(){
        $title = 'All Business Pages';
        $lefttitle = '<li class="breadcrumb-item active"><a>All Business Pages</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $business = AboutUs::where('section_type', 2)->get();
        return view('admin.businessall', compact('title', 'lefttitle', 'social_icons', 'basic_info','business'));
    }

    public function add(Request $request){
        //send section_type = 2 when adding the business details
    }
}