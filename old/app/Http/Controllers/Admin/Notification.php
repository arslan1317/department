<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserRequest;

class Notification extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$title = 'Notification';
    	$lefttitle = '<li class="breadcrumb-item active">Notification</li></ol>';
    	$notification = UserRequest::orderBy('id', 'desc')->get();
        return view('admin.notification', compact('notification', 'title', 'lefttitle'));
    }
}
