<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCategory;
use Auth;
use App\User;
use App\News;
use App\Event;
use App\Source;
use App\SubDepartment;

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
        $subdepartment = SubDepartment::where('id', $access_categories->sub_dep_id)->first();
    	return view('user.dashboard', compact('title', 'lefttitle', 'access_categories', 'dashboard', 'subdepartment'));
    }

    public function profile(){
        $title = "Profile";
        $lefttitle = '<li class="breadcrumb-item active">Profile</li></ol>';
        $access_categories = UserCategory::where('user_id', Auth::id())->first();
        $subdepartment = SubDepartment::where('id', $access_categories->sub_dep_id)->first();
        return view('user.profile', compact('title', 'lefttitle', 'access_categories', 'subdepartment'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->update();
        return redirect()->back()->with('success', 'Name is successfully updated');
    }

    public function password(){
        $title = "Password";
        $lefttitle = '<li class="breadcrumb-item active">Profile</li></ol>';
        $access_categories = UserCategory::where('user_id', Auth::id())->first();
        $subdepartment = SubDepartment::where('id', $access_categories->sub_dep_id)->first();
        return view('user.password', compact('title', 'lefttitle', 'access_categories', 'subdepartment'));
    }

    public function updatepassword(Request $request, $id){
        $user = User::find($id);
        $validatedData = $request->validate([
            'current' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'required'
        ]);
        if( $request->new_password == $request->confirm_new_password && Hash::check($request->current, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->update();
            return redirect()->back()->with('success', 'Password is successfully updated');
        }
        return redirect()->back()->with('error', 'Password not matched');
    }
}
