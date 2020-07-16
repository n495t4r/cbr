<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Organisation;
use Response;
use Brian2694\Toastr\Facades\Toastr;
    

class OrganisationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Organisation::all();
        return view('admin.organisations.index',compact(['data']));
    }

    public function create()
    {
       // return view('admin.organisations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
         'name' => 'required',
         'description',
         'orgCode' => 'required'
        ]);
   
        Organisation::create($request->all());
        $notification = Toastr::success('Organisation created successfully','Success');
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
        $data =  Organisation::find($id);
        return view('admin.organisations.show',compact(['data']));
    }

    public function edit($id)
    {
       $data = Organisation::find($id);
       return view('admin.organisations.edit',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description'  => '',
            'orgCode' => 'required'
        ]);
        
        Organisation::find($id)->update($request->except('_method','_token'));
        $notification = Toastr::success('Organisation updated successfully','Success');
        return redirect()->back()->with($notification);   
    }

    public function destroy($id)
    {
        Organisation::find($id)->delete();
        $notification = Toastr::success('Organisation deleted successfully','Success');
        return redirect()->back()->with($notification);
    }

}


