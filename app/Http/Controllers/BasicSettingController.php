<?php

namespace App\Http\Controllers;

use App\Admin\BasicSetting;
use Illuminate\Http\Request;

class BasicSettingController extends Controller
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
        $title = 'Basic Setting';
        $lefttitle = '<li class="breadcrumb-item active"><a>Basic Setting</a></li></ol>';
        return view('admin.basic', compact('title', 'lefttitle'));
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
     * @param  \App\Admin\BasicSetting  $basicSetting
     * @return \Illuminate\Http\Response
     */
    public function show(BasicSetting $basicSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\BasicSetting  $basicSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicSetting $basicSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\BasicSetting  $basicSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasicSetting $basicSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\BasicSetting  $basicSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicSetting $basicSetting)
    {
        //
    }
}
