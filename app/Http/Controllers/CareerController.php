<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use Illuminate\Http\Request;
use App\AboutUs;

class CareerController extends Controller
{
    // Start Note
    // Pages Table For Business is section_type = 4
    // End Note

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Career';
        $lefttitle = '<li class="breadcrumb-item active"><a>Career</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        return view('admin.career', compact('title', 'lefttitle', 'social_icons', 'basic_info'));
    }

    public function all(){
        $title = 'All Career';
        $lefttitle = '<li class="breadcrumb-item active"><a>All Career</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $business = AboutUs::where('section_type', 4)->get();
        return view('admin.careerall', compact('title', 'lefttitle', 'social_icons', 'basic_info','business'));
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'jobtitle' => 'required',
            'details' => 'required',
            'level' => 'required',
            'duration' => 'required',
        ]);
        $page = new AboutUs();
        $page->jobtitle = $request->input('jobtitle');
        $page->details = $request->input('details');
        $page->level = $request->input('level');
        $page->duration = $request->input('duration');
        $page->section_type = $request->input('section_type');
        $page->save();
        return redirect()->back()->with('success', 'Career is successfully Added');
    }
}
