<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use Illuminate\Http\Request;
use App\AboutUs;

class TendorController extends Controller
{
    // Start Note
    // Pages Table For Business is section_type = 6
    // End Note

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Tendor';
        $lefttitle = '<li class="breadcrumb-item active"><a>Tendor</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $tendor = AboutUs::where('section_type', 6)->get();
        return view('admin.tendor', compact('title', 'lefttitle', 'social_icons', 'basic_info', 'tendor'));
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'tendorno' => 'required',
            'details' => 'required',
            'datetime' => 'required'
        ]);
        $page = new AboutUs();
        $page->heading = $request->input('tendorno');
        $page->details = $request->input('details');
        $page->details = $request->input('datetime');
        $page->section_type = $request->input('section_type');
        $page->save();

        return redirect()->back()->with('success', 'Tendor is successfully Added');
    }
}
