<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCategory;
use Auth;
use App\News;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$title = "News";
    	$access_categories = UserCategory::where('user_id', Auth::id())->first();
    	$lefttitle = '<li class="breadcrumb-item active">'.$access_categories->subdepart->department->name.'</li><li class="breadcrumb-item active">'.$access_categories->subdepart->name.'</li><li class="breadcrumb-item active">News</li></ol>';
        $news = News::where('user_id', Auth::id())->orderby('id', 'ASC')->get();
    	return view('user.news', compact('title', 'lefttitle', 'access_categories', 'news'));
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'headline' => 'required',
            'body' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $new = new News();
        $new->headline = $request->input('headline');
        $new->body = $request->input('body');
        $new->image = $imageName;
        $new->sub_dep_id = $request->input('sub_dep_id');
        $new->user_id = Auth::id();
        $new->status = 0;
        $new->save();

        return redirect()->back()->with('success', 'News is successfully Added');
    }
}
