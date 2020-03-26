<?php

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Http\Request;
use App\Department;
use App\UserCategory;
use App\SourceLog;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use DB;
use App\Imports\SourceLogImport;

class SourceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Source';
        $lefttitle = '<li class="breadcrumb-item"><a href="javascript:;">Department</a></li><li class="breadcrumb-item active">Source</li></ol>';
        $access_categories = UserCategory::where('user_id', Auth::id())->first();
        $source = Source::where('user_id', Auth::id())->orderby('id', 'ASC')->get();
        return view('user.source', compact('title', 'lefttitle', 'access_categories', 'source'));
    }

    public function importexcel(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'file' => 'required|mimes:csv',
        ]);

        $source = new Source();
        $source->name = $request->input('name');
        $source->sub_dep_id = $request->input('sub_dep_id');
        $source->user_id = Auth::id();
        $source->save();
        $id = $source->id;
        Excel::import(new SourceLogImport($id),request()->file('file'));

        return back()->with('success', 'Excel Data Imported successfully.');

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
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Source $source)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        //
    }
}
