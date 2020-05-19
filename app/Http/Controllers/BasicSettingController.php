<?php

namespace App\Http\Controllers;

use App\Admin\BasicSetting;
use Illuminate\Http\Request;

class BasicSettingController extends Controller
{

    /*
        section_type = 1 (Basic Info)
        section_type = 2 (Social Info)
        section_type = 3 (Slider Info)
        section_type = 4 (Slider Lower Info)
        section_type = 5 (Info Box)
    */

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Basic Setting';
        $lefttitle = '<li class="breadcrumb-item active"><a>Basic Setting</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $slider_lower = BasicSetting::where('section_type', 4)->first();
        $info_box = BasicSetting::where('section_type', 5)->get();
        return view('admin.basic', compact('title', 'lefttitle', 'social_icons', 'slider_lower', 'info_box', 'basic_info'));
    }

    public function social(Request $request){
        $basic_setting = new BasicSetting();
        $basic_setting->link = $request->input('link');
        $basic_setting->icon = $request->input('icon');
        $basic_setting->section_type = 2;
        $basic_setting->save();
        return redirect()->back()->with('notifysuccess', 'Social Icon Successfully Added');
    }

    public function updatesocial(Request $request, $id){
        $basic_setting = BasicSetting::find($id);
        $basic_setting->link = $request->input('link');
        $basic_setting->icon = $request->input('icon');
        $basic_setting->save();
        return redirect()->back()->with('notifysuccess', 'Social Icon Successfully Updated');
    }

    public function deletebasic($id){
        $basic_setting = BasicSetting::findOrFail($id);
        $status = '';
        if($basic_setting->section_type == 2){
            $status = 'Social Icon';
        }
        $basic_setting->delete();
        return redirect()->back()->with('notifysuccess', $status .' Successfully Deleted');
    }

    public function updatesliderlower(Request $request, $id){
        $basic_setting = BasicSetting::find($id);
        $basic_setting->slider_lower_heading = $request->input('slider_lower_heading');
        $basic_setting->slider_lower_paragraph = $request->input('slider_lower_paragraph');
        $basic_setting->save();
        return redirect()->back()->with('notifysuccess', 'Slider Lower Successfully Updated');
    }

    public function infobox(Request $request){
        $basic_setting = new BasicSetting();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $basic_setting->info_image = $imageName;
        $basic_setting->info_heading = $request->input('info_heading');
        $basic_setting->info_paragraph = $request->input('info_paragraph');
        $basic_setting->info_paragraph = $request->input('info_paragraph');
        $basic_setting->section_type = 5;
        $basic_setting->save();
        return redirect()->back()->with('notifysuccess', 'Info Box Successfully Added');
    }

    public function setting(Request $request, $id) {

        $basic_setting = BasicSetting::find($id);
        $basic_setting->phone = $request->input('phone');
        $basic_setting->email = $request->input('email');
        $basic_setting->address = $request->input('address');
        $basic_setting->footer_text = $request->input('footertext');
        $basic_setting->copyright = $request->input('copyright');
        $basic_setting->save();
        return redirect()->back()->with('notifysuccess', 'Basic Setting is successfully Added');
    }
}
