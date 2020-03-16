<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$title = "Dashboard";
    	$lefttitle = '<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li><li class="breadcrumb-item active">Subdepartment</li></ol>';
        return view('admin.dashboard', compact('title', 'lefttitle'));
    }
}
