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
            'fax' => 'required|numeric|digits_between:1,10',
            'department_id' => 'required',
        ]);

        $show = Subdepartment::create($request->input());
   
        return redirect()->back()->with('success', 'Subdepartment is successfully saved');
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
            'website' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'fax' => 'required|numeric|digits_between:1,10',
            'department_id' => 'required',
        ]);
        Subdepartment::whereId($id)->update($validatedData);
        return redirect()->back()->with('success', 'Subdepartment is successfully updated');
    }

    public function destroy($id){
        $subdepartment = Subdepartment::find($id);
        if($subdepartment->status == 1){
            $subdepartment->status = 0;
        }else{
            $subdepartment->status = 1;
        }
        $subdepartment->save();
        return redirect()->back()->with('success', 'Subdepartment is successfully updated');
    }
}
