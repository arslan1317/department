<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCategory;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$title = "Dashboard";
    	$lefttitle = '<li class="breadcrumb-item active">Dashboard</li></ol>';
    	$access_categories = UserCategory::where('user_id', Auth::id())->first();
    	return view('user.dashboard', compact('title', 'lefttitle', 'access_categories'));
    }
}
