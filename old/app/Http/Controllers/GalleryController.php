<?php

namespace App\Http\Controllers;
use App\Admin\BasicSetting;
use Illuminate\Http\Request;
use App\AboutUs;
use File;

class GalleryController extends Controller
{
    // Start Note
    // Pages Table For Business is section_type = 5
    // End Note
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Gallery';
        $lefttitle = '<li class="breadcrumb-item active"><a>Gallery</a></li></ol>';
        $basic_info = BasicSetting::where('section_type', 1)->first();
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $gallery = AboutUs::where('section_type', 5)->get();
        $collection_name = AboutUs::where('section_type', 9)->get();
        return view('admin.gallery', compact('title', 'lefttitle', 'social_icons', 'basic_info', 'gallery', 'collection_name'));
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);
        $page = new AboutUs();
        $page->gallery = $imageName;
        $page->title = $request->input('name');
        $page->caption = $request->input('caption');
        $page->section_type = $request->input('section_type');
        $page->save();
        return redirect()->back()->with('success', 'Gallery Image is successfully Added');

    } 

    public function addcollecttion(Request $request){
        // section_type = 9
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $page = new AboutUs();
        $page->title = $request->input('name');
        $page->section_type = $request->input('section_type');
        $page->save();
        return redirect()->back()->with('success', 'Collection Name is successfully Added');

    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $page = AboutUs::find($id);
        if (request()->hasFile('image') && request('image') != '') {
            $imagePath = public_path('images/'.$page->gallery);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $newimageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('images'), $newimageName);
            $page->gallery = $newimageName;
        }

        $page->title = $request->input('name');
        $page->caption = $request->input('caption');
        $page->update();
        return redirect()->back()->with('success', 'Gallery Image is successfully updated');
    }

    public function destroy($id){
        $page = AboutUs::findOrFail($id);
        $imagePath = public_path('images/'.$page->gallery);
        if(File::exists($imagePath)){
            unlink($imagePath);
        }
        $page->delete();
        return redirect()->back()->with('success', 'Gallery Image is successfully Deleted');
    }

}
