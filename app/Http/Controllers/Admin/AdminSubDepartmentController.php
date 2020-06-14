<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;
use App\SubDepartment;
use App\UserRequest;
use App\UserCategory;
use App\Company;

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

        SubDepartment::create($request->input());
   
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
        SubDepartment::whereId($id)->update($validatedData);
        return redirect()->back()->with('success', 'Subdepartment is successfully updated');
    }

    public function destroy($id){
        $subdepartment = SubDepartment::find($id);
        if($subdepartment->status == 1){
            $subdepartment->status = 0;
        }else{
            $subdepartment->status = 1;
        }
        $subdepartment->save();
        return redirect()->back()->with('success', 'Subdepartment is successfully updated');
    }

    public function approved($id){
        $user_request = UserRequest::find($id);
        $user_request->status = 1;
        UserCategory::create([
            'user_id' => $user_request->user_id,
            'sub_dep_id' => $user_request->sub_dep_id,
        ]);
        $user_request->save();
        return redirect()->back()->with('notifysuccess', 'Successfully Approved');
    }

    public function company(){
        $title = 'Company Info';
    	$lefttitle = '<li class="breadcrumb-item"><a href="javascript:;">Department</a></li><li class="breadcrumb-item active">Company Info</li></ol>';
        $department = SubDepartment::orderBy('id', 'desc')->get();
        $compnay = Company::all();
        return view('admin.company', compact('department', 'title', 'lefttitle', 'compnay'));
    }

    public function companystore(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required',
            'website' => 'required',
            'details' => 'required'
        ]);

        $compnay = new Company();

        if (request()->hasFile('image') && request('image') != '') {
            $newimageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $newimageName);
            $compnay->image = $newimageName;
        }
        $compnay->name = $request->input('name');
        $compnay->website = $request->input('website');
        $message = $request->input('details');
        $dom = new \DOMDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $img){
			$src = $img->getAttribute('src');

			if(preg_match('/data:image/', $src)){

				preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
				$mimetype = $groups['mime'];
			
				$filename = uniqid();
				$filepath = "/images/$filename.$mimetype";

				$image = Image::make($src)
				  ->encode($mimetype, 100)
				  ->save(public_path($filepath));
				
				$new_src = asset($filepath);
				$img->removeAttribute('src');
				$img->setAttribute('src', $new_src);
			}
        }
        $compnay->details = $dom->saveHTML();
        $compnay->sub_id = $request->input('sub_id');
        $compnay->telephone = $request->input('telephone');
        $compnay->save();
        return redirect()->back()->with('success', 'Company is successfully Added');
    }

    public function companyupdate(Request $request, $id){

    }

    public function companydestroy($id){
        
    }
}
