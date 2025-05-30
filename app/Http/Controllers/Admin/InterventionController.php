<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Intervention;
use App\Programme;
use Response;
use Brian2694\Toastr\Facades\Toastr;


class InterventionController extends Controller
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
        $data = Intervention::with('getProgrammeRelation')->orderBy('id','asc')->paginate(10)->setPath('interventions');
        $data2 = Programme::orderBy('id','asc')->paginate(10)->setPath('interventions');
        return view('admin.interventions.index',compact(['data','data2']));
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
        $request->validate([
            'name' => 'required',
            'intCode' => 'required',
            'description',
            'progID' => 'required'
        ]);
   
           Intervention::create($request->all());
           $notification = Toastr::success('Intervention created successfully','Success');
           return redirect()->back()->with($notification);
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
    public function edit($id)
    {
        $data = Intervention::find($id);
        $data2 = Programme::orderBy('id','asc')->paginate(10)->setPath('programmes');
        return view('admin.interventions.edit',compact(['data','data2']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'intCode' => 'required',
            'description',
            'progID' => 'required'
        ]);
        $notification = Toastr::success('Intervention updated successfully','Success');
        Intervention::find($id)->update($request->except('_method','_token'));
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = Toastr::success('Intervention deleted successfully','Success');
        Intervention::find($id)->delete();
        return redirect()->back()->with($notification);
    }
}
