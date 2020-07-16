<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Programme;
use App\Organisation;
use Response;
use Brian2694\Toastr\Facades\Toastr;


class ProgrammeController extends Controller
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
        $data = Programme::with('getOrganisationRelation')->orderBy('id','asc')->paginate(10)->setPath('programmes');
        $data2 = Organisation::orderBy('id','asc')->paginate(10)->setPath('organisations');
        return view('admin.programmes.index',compact(['data','data2']));
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
            'progCode' => 'required',
            'description',
            'orgID' => 'required'
        ]);
   
           Programme::create($request->all());
           $notification = Toastr::success('Programme created successfully','Success');
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
       
        $data = Programme::find($id);
        $data2 = Organisation::orderBy('id','asc')->paginate(10)->setPath('organisations');
        return view('admin.programmes.edit',compact(['data','data2']));
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
            'progCode' => 'required',
            'description',
            'orgID' => 'required'
        ]);
        $notification = Toastr::success('Programme updated successfully','Success');
        Programme::find($id)->update($request->except('_method','_token'));
        return redirect('admin/programmes')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = Toastr::success('Programme deleted successfully','Success');
        Programme::find($id)->delete();
        return redirect()->back()->with($notification);
    }
}
