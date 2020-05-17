<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use App\Department;
use App\SubDepartment;
use App\News;
use App\Event;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $slider_lower = BasicSetting::where('section_type', 4)->first();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $info_box = BasicSetting::where('section_type', 5)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $news = News::orderBy('id', 'desc')->take(4)->get();
        $events = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->limit(3)->get();
        return view('welcome',compact('social_icons', 'subdeparment', 'slider_lower', 'info_box', 'all_department', 'latest_news', 'news', 'events'));
    }

    public function news(){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $last_7_days_date = \Carbon\Carbon::today()->subDays(7);
        $last_7_days = News::where('created_at', '>=', $last_7_days_date)->orderBy('id', 'desc')->get();
        $last_30_days_date = \Carbon\Carbon::today()->subDays(30);
        $last_30_days = News::whereBetween('created_at', [$last_30_days_date, $last_7_days_date])->orderBy('id', 'desc')->get();
        return view('news',compact('social_icons', 'subdeparment', 'all_department', 'latest_news','last_7_days', 'last_30_days'));
    }

    public function news_single($id){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = News::find($id);
        return view('news_single',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news'));
    }

    public function news_department($id){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = News::where('sub_dep_id', $id)->orderBy('id', 'desc')->get();    
        return view('news_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news'));
    }

    public function news_main_department($id){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = News::where('department_id', $id)->orderBy('id', 'desc')->get();    
        return view('news_department',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news'));
    }

    public function events(){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $upcoming_events = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->get();
        return view('events',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'upcoming_events'));
    }

    public function events_single($id){
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $subdeparment = SubDepartment::where('department_id', 1)->inRandomOrder()->limit(3)->get();
        $all_department = Department::all();
        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $get_news = Event::find($id);
        return view('events_single',compact('social_icons', 'subdeparment', 'all_department', 'latest_news', 'get_news'));
    }

}
