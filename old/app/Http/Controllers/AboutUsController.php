<?php

namespace App\Http\Controllers;

use App\AboutUs;
use Illuminate\Http\Request;
use App\Admin\BasicSetting;

class AboutUsController extends Controller
{

    // Pages Table
    // section_type = 1
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'About Us';
        $lefttitle = '<li class="breadcrumb-item active"><a>About Us</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $about = AboutUs::where('section_type' , 1)->first();
        return view('admin.aboutus', compact('title', 'lefttitle', 'social_icons', 'basic_info', 'about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'details' => 'required'
        ]);
        $page = AboutUs::find($id);
        if (request()->hasFile('banner_image') && request('banner_image') != '') {
            $imagePath = public_path('images/'.$page->banner_image);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $newimageName = time().'.'.$request->banner_image->extension();
            $request->banner_image->move(public_path('images'), $newimageName);
            $page->banner_image = $newimageName;
        }

        $page->heading = $request->input('heading');
        $page->details = $request->input('details');
        $page->update();
        return redirect()->back()->with('success', 'About Us is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
