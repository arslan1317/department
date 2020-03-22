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
}
