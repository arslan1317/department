<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use Illuminate\Http\Request;
use App\AboutUs;

class GalleryController extends Controller
{
    // Start Note
    // Pages Table For Business is section_type = 5
    // End Note
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Gallery';
        $lefttitle = '<li class="breadcrumb-item active"><a>Gallery</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $gallery = AboutUs::where('section_type', 5)->get();
        return view('admin.gallery', compact('title', 'lefttitle', 'social_icons', 'basic_info', 'gallery'));
    }

}
