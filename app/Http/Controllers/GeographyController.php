<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use Illuminate\Http\Request;
use App\AboutUs;

class GeographyController extends Controller
{
    // Start Note
    // Pages Table For Business is section_type = 3
    // End Note

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Geography Pages';
        $lefttitle = '<li class="breadcrumb-item active"><a>Geography Pages</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        return view('admin.geography', compact('title', 'lefttitle', 'social_icons', 'basic_info'));
    }

    public function all(){
        $title = 'Geography Pages';
        $lefttitle = '<li class="breadcrumb-item active"><a>Geography Pages</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $business = AboutUs::where('section_type', 3)->get();
        return view('admin.geographyall', compact('title', 'lefttitle', 'social_icons', 'basic_info','business'));
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'heading' => 'required',
            'details' => 'required'
        ]);
        $page = new AboutUs();
        if (request()->hasFile('banner_image') && request('banner_image') != '') {
            $imageName = time().'.'.$request->banner_image->extension();
            $request->banner_image->move(public_path('images'), $imageName);
            $page->banner_image = $imageName;
        }
        $page->heading = $request->input('heading');
        $page->details = $request->input('details');
        $page->section_type = $request->input('section_type');
        $page->save();

        return redirect()->back()->with('success', 'Geography is successfully Added');
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
}
