<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;

class AdminSubDepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$title = 'Subdepartment';
    	$lefttitle = '<li class="breadcrumb-item"><a href="javascript:;">Department</a></li><li class="breadcrumb-item active">Subdepartment</li></ol>';
    	$department = Department::all();
        return view('admin.subdeparment', compact('department', 'title', 'lefttitle'));
    }
}
