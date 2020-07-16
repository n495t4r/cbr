<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Monitor;

class MonitorsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['monitors']= Monitor::all();
        return view('admin.monitors.index')->with($arr);
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
    public function store(Request $request, Monitor $im)
    {
        $im->first_name = $request->first_name;
        $im->middle_name = $request->middle_name;
        $im->last_name = $request->last_name;
        $im->password = $request->password;
        $im->email = $request->email;
        $im->phone = $request->phone;
        $im->gender = $request->gender;
        $im->dob = $request->dob;
        $im->save();
        return redirect()->route('admin.monitors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Monitor $monitor)
    {
        $arr['monitor'] = $monitor;
        return view('admin.monitors.edit')->with($arr);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitor $monitor)
    {
        $monitor->first_name = $request->first_name;
        $monitor->middle_name = $request->middle_name;
        $monitor->last_name = $request->last_name;
        $monitor->email = $request->email;
        $monitor->phone = $request->phone;
        $monitor->gender = $request->gender;
        $monitor->dob = $request->dob;
        $monitor->save();
        return redirect()->route('admin.monitors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
