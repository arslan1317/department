<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\UserCategory;
use Auth;

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
        $lefttitle = '<li class="breadcrumb-item active">'.$access_categories->subdepart->department->name.'</li><li class="breadcrumb-item active">'.$access_categories->subdepart->name.'</li><li class="breadcrumb-item active">Events</li></ol>';
        $events = Event::where('user_id', Auth::id())->orderby('id', 'ASC')->get();
        return view('user.events', compact('title', 'lefttitle', 'access_categories', 'events'));
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
        //
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
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function viewbysubdepartmentid($depart, $name, $id){
        $title = "Events";
        $lefttitle = '<li class="breadcrumb-item active">Events</li><li class="breadcrumb-item active">'.$depart.'</li><li class="breadcrumb-item active">'.$name.'</li></ol>';
        $events = Event::where('sub_dep_id', $id)->orderby('id', 'ASC')->get();
        return view('admin.event-view', compact('title', 'lefttitle', 'events'));
    }
}
