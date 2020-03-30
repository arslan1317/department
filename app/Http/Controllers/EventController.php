<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\UserCategory;
use Auth;
use App\SubDepartment;
use App\Department;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = "Events";
        $access_categories = UserCategory::where('user_id', Auth::id())->first();
        $subdepartment = SubDepartment::where('id', $access_categories->sub_dep_id)->first();
        $lefttitle = '<li class="breadcrumb-item active">'.$subdepartment->department->name.'</li><li class="breadcrumb-item active">'.$subdepartment->name.'</li><li class="breadcrumb-item active">Events</li></ol>';
        $events = Event::where('user_id', Auth::id())->orderby('id', 'ASC')->get();
        return view('user.events', compact('title', 'lefttitle', 'access_categories', 'events', 'subdepartment'));
    }

    public function adminindex(){
        $title = "Events";
        $department = Department::all();
        $lefttitle = '<li class="breadcrumb-item active">Add Events</li></ol>';
        $events = Event::where('user_id', Auth::id())->orderby('id', 'ASC')->get();
        return view('admin.events', compact('title', 'lefttitle', 'events','department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'details' => 'required',
            'datetime' => 'required'
        ]);

        $dateRange = $request->input('datetime');
        $dates = explode("-", $dateRange);
        $events = new Event();
        $events->name = $request->input('name');
        $events->details = $request->input('details');
        $events->start_date = date("Y-m-d H:i:s", strtotime(trim($dates[0])));
        $events->end_date = date("Y-m-d H:i:s", strtotime(trim($dates[1])));
        $events->sub_dep_id = $request->input('sub_dep_id');
        $events->user_id = Auth::id();
        $events->save();

        return redirect()->back()->with('success', 'Event is successfully Added');
    }

    public function adminstore(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'details' => 'required',
            'datetime' => 'required'
        ]);

        $dateRange = $request->input('datetime');
        $dates = explode("-", $dateRange);
        $events = new Event();
        $events->name = $request->input('name');
        $events->details = $request->input('details');
        $events->start_date = date("Y-m-d H:i:s", strtotime(trim($dates[0])));
        $events->end_date = date("Y-m-d H:i:s", strtotime(trim($dates[1])));
        $events->department_id = $request->input('department_id');
        $events->user_id = Auth::id();
        $events->status = 1;
        $events->save();

        return redirect()->back()->with('success', 'Event is successfully Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'details' => 'required',
            'datetime' => 'required'
        ]);
        $dateRange = $request->input('datetime');
        $dates = explode(" - ", $dateRange);
        $event->name = $request->input('name');
        $event->details = $request->input('details');
        $event->start_date = date("Y-m-d H:i:s", strtotime(trim($dates[0])));
        $event->end_date = date("Y-m-d H:i:s", strtotime(trim($dates[1])));
        $event->update();
        return redirect()->back()->with('success', 'Event is successfully updated');
    }

    public function adminupdate(Request $request, $id)
    {
        $event = Event::find($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'details' => 'required',
            'datetime' => 'required'
        ]);
        $dateRange = $request->input('datetime');
        $dates = explode(" - ", $dateRange);
        $event->name = $request->input('name');
        $event->details = $request->input('details');
        $event->start_date = date("Y-m-d H:i:s", strtotime(trim($dates[0])));
        $event->end_date = date("Y-m-d H:i:s", strtotime(trim($dates[1])));
        $event->department_id = $request->input('department_id');
        $event->update();
        return redirect()->back()->with('success', 'Event is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->back()->with('success', 'Event is successfully Deleted');
    }

    public function viewbysubdepartmentid($depart, $name, $id){
        $title = "Events";
        $lefttitle = '<li class="breadcrumb-item active">Events</li><li class="breadcrumb-item active">'.$depart.'</li><li class="breadcrumb-item active">'.$name.'</li></ol>';
        $events = Event::where('sub_dep_id', $id)->orderby('id', 'ASC')->get();
        return view('admin.event-view', compact('title', 'lefttitle', 'events'));
    }

    public function viewsingleevent($depart, $name, $id){
        $events = Event::find($id);
        $events->status = 1;
        $events->update();
        $title = "Events";
        if($name != 0){
            $lefttitle = '<li class="breadcrumb-item active">Events</li><li class="breadcrumb-item active">'.$depart.'</li><li class="breadcrumb-item active">'.$name.'</li><li class="breadcrumb-item active">'.$events->name.'</li></ol>';
        }else{
            $lefttitle = '<li class="breadcrumb-item active">Events</li><li class="breadcrumb-item active">'.$depart.'</li><li class="breadcrumb-item active">'.$events->name.'</li></ol>';
        }
        return view('admin.event-single', compact('title', 'lefttitle', 'events'));
    }

    public function allevents(){
        $events = Event::orderBy('id', 'ASC')->get();
        $title = "Events";
        $lefttitle = '<li class="breadcrumb-item active">Events</li><li class="breadcrumb-item active">All Events</li></ol>';
        return view('admin.events-all', compact('title', 'lefttitle', 'events'));
    }
}
