<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCategory;
use Auth;
use App\News;
use App\Event;
use App\Source;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $dashboard = [];
        $news = News::where('user_id', '=', Auth::id())->get();
        $events = Event::where('user_id', '=', Auth::id())->get();
        $source = Source::where('user_id', '=', Auth::id())->get();
        $dashboard['news'] = count($news);
        $dashboard['events'] = count($events);
        $dashboard['source'] = count($source);
    	$title = "Dashboard";
    	$lefttitle = '<li class="breadcrumb-item active">Dashboard</li></ol>';
    	$access_categories = UserCategory::where('user_id', Auth::id())->first();
    	return view('user.dashboard', compact('title', 'lefttitle', 'access_categories', 'dashboard'));
    }
}
