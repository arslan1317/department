<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;
use App\Subdepartment;

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
    	$department = Department::orderBy('id', 'desc')->get();
        return view('admin.subdeparment', compact('department', 'title', 'lefttitle'));
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'website' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'fax' => 'required|numeric',
            'department_id' => 'required',
        ]);

        $show = Subdepartment::create($request->input());
   
        return redirect()->back()->with('success', 'Subdepartment is successfully saved');
    }
}
