<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use App\Department;
use App\SubDepartment;
use App\News;
use App\Event;
use App\AboutUs;
use App\Source;
use App\Company;
use DB;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $slider_lower = BasicSetting::where('section_type', 4)->first();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $info_box = BasicSetting::where('section_type', 5)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $news = News::orderBy('id', 'desc')->take(4)->get();
        $events = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->limit(3)->get();
        if(count($events) == 0){
            $events = Event::orderBy('id', 'desc')->take(3)->get();
        }
        $source_table = Source::inRandomOrder()->limit(2)->get();
        $about = BasicSetting::where('section_type', 6)->first();
        return view('welcome',compact('social_icons', 'subdeparment', 'slider_lower', 'info_box', 'all_department', 'latest_news', 'news', 'events', 'basic_info','about', 'source_table'));
    }

    public function news(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $last_7_days_date = \Carbon\Carbon::today()->subDays(7);
        $last_7_days = News::where('created_at', '>=', $last_7_days_date)->orderBy('id', 'desc')->get();
        $last_30_days_date = \Carbon\Carbon::today()->subDays(30);
        $last_30_days = News::whereBetween('created_at', [$last_30_days_date, $last_7_days_date])->orderBy('id', 'desc')->get();
        return view('news',compact('social_icons', 'subdeparment', 'all_department', 'latest_news','last_7_days', 'last_30_days', 'basic_info'));
    }

    public function news_single($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = News::find($id);
        if($get_news->sub_dep_id == null){
            $realted_news = News::whereNotIn('id', [$get_news->id])->where('department_id', $get_news->department_id)->inRandomOrder()->limit(3)->get();
        }else{
            $realted_news = News::whereNotIn('id', [$get_news->id])->where('sub_dep_id', $get_news->sub_dep_id)->inRandomOrder()->limit(3)->get();
        }
        return view('news_single',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info', 'realted_news'));
    }

    public function news_department($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = News::where('sub_dep_id', $id)->orderBy('id', 'desc')->get();    
        return view('news_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info'));
    }

    public function events_department($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = Event::where('sub_dep_id', $id)->orderBy('id', 'desc')->get();    
        return view('events_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info'));
    }

    public function sources_department($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = Source::where('sub_dep_id', $id)->orderBy('id', 'desc')->get();    
        return view('sources_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info'));
    }

    public function news_main_department($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = News::where('department_id', $id)->orderBy('id', 'desc')->get();    
        return view('news_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info'));
    }

    public function events_main_department($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = Event::where('department_id', $id)->orderBy('id', 'desc')->get();    
        return view('events_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info'));
    }

    public function sources_main_department($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = Source::where('department_id', $id)->orderBy('id', 'desc')->get();    
        return view('sources_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info'));
    }

    public function events(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $upcoming_events = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->get();
        return view('events',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'upcoming_events', 'basic_info'));
    }

    public function events_single($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = Event::find($id);
        return view('events_single',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info'));
    }

    public function all_data($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $sub_news = News::where('sub_dep_id', $id)->take(3)->get();
        $sub_events = Event::where('sub_dep_id', $id)->take(3)->get();
        $sub_sources = Source::where('sub_dep_id', $id)->take(3)->get();
        $subdepartment_name = SubDepartment::find($id);
        return view('subdepartment-all',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info', 'sub_news','sub_events', 'sub_sources', 'subdepartment_name'));
    }

    public function sources(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $last_7_days_date = \Carbon\Carbon::today()->subDays(7);
        $last_7_days = Source::where('created_at', '>=', $last_7_days_date)->orderBy('id', 'desc')->get();
        $last_30_days_date = \Carbon\Carbon::today()->subDays(30);
        $last_30_days = Source::whereBetween('created_at', [$last_30_days_date, $last_7_days_date])->orderBy('id', 'desc')->get();
        return view('sources',compact('social_icons', 'subdeparment', 'all_department', 'latest_news','last_7_days', 'last_30_days', 'basic_info'));
    }

    public function sources_single($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = Source::find($id);
        return view('sources_single',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news', 'basic_info'));
    }

    public function subdepartment(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        return view('sub_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info'));
    }

    public function contact(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        return view('contact',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info'));
    }

    public function gallery(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $things = AboutUs::where('section_type', 5)->get();
        $gellery = $things->groupBy('title');
        return view('gallery',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info', 'gellery'));
    }

    public function about(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $about = AboutUs::where('section_type', 1)->first();
        return view('about',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info','about'));
    }

    public function business($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $business = AboutUs::where('id', $id)->first();
        return view('business',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info','business'));
    }

    public function projects(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $business = AboutUs::where('section_type', 7)->first();
        return view('project',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info','business'));
    }

    public function awards(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $business = AboutUs::where('section_type', 8)->first();
        return view('awards',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info','business'));
    }

    public function career(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $career = AboutUs::where('section_type', 4)->orderBy('id', 'desc')->get();
        return view('career',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info','career'));
    }

    public function tendor(){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $career = AboutUs::where('section_type', 6)->orderBy('id', 'desc')->get();
        return view('tendor',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info','career'));
    }

    public function company($id){
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $company = Company::where('id', $id)->first();
        return view('company',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'basic_info','company'));
    }


}
