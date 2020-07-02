<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;
use App\SubDepartment;
use App\User;
use App\News;
use App\Event;
use App\UserRequest;
use Illuminate\Support\Facades\Hash;

class AdminDashboard extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dashboard = [];
        $dashboard['departments'] = Department::count();
        $dashboard['subdepartments'] = SubDepartment::count();
        $users = User::where('isAdmin', '!=', 1)->get();
        $dashboard['users'] = count($users);
        $dashboard['news'] = News::count();
        $dashboard['events'] = Event::count();
        $dashboard['requests'] = UserRequest::count();
    	$title = "Dashboard";
    	$lefttitle = '<li class="breadcrumb-item active">Dashboard</li></ol>';
        return view('admin.dashboard', compact('title', 'lefttitle', 'dashboard'));
    }

    public function profile(){
        $title = "Profile";
        $lefttitle = '<li class="breadcrumb-item active">Profile</li></ol>';
        return view('admin.profile', compact('title', 'lefttitle'));
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
        return view('admin.password', compact('title', 'lefttitle'));
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
