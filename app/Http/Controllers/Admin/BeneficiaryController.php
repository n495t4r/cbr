<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Beneficiary;
use App\Programme;
use Response;
use Brian2694\Toastr\Facades\Toastr;



class BeneficiaryController extends Controller
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
        $data = Beneficiary::with('getProgrammeRelation')->get();
        $data2 = Programme::all();
        return view('admin.beneficiaries.index',compact(['data','data2']));
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
        // $request->validate([
        //     'progID' => 'Required',
        //     'first_name'=> 'Required',
        //     'middle_name',
        //     'last_name'=> 'Required',
        //     'phone'=> 'Required',
        //     'gender'=> 'Required',
        //     'dob'=> 'Required',
        //     'address'=> 'Required',
        //     'alt_phone',
        //     'email',
        //     'state'=> 'Required',
        //     'lga'=> 'Required',
        //     'marital_status'=> 'Required',
        //     'occupation',
        //     'tpid'=> 'Required',
        //     'bank_name'=> 'Required',
        //     'acct_number'=> 'Required',
        //     'bvn'=> 'Required',
        //     'id_type'=> 'Required',
        //     'id_number'=> 'Required',
        //     'nok_fullname'=> 'Required',
        //     'nok_relationship'=> 'Required',
        //     'nok_address'=> 'Required',
        //     'nok_phone' => 'Required'
        // ]);
   
           Beneficiary::create($request->all());
           $notification = Toastr::success('Beneficiary created successfully','Success');
           return redirect('admin/beneficiaries')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Beneficiary::find($id);
        return view('admin.beneficiaries.show',compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Beneficiary::find($id);
        $data2 = Programme::orderBy('id','asc')->paginate(10)->setPath('programmes');
        return view('admin.beneficiaries.edit',compact(['data','data2']));
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
            // 'progID' => 'Required',
            'first_name'=> 'Required',
            'middle_name',
            'last_name'=> 'Required',
            'phone'=> 'Required',
            'gender'=> 'Required',
            'dob'=> 'Required',
            'address'=> 'Required',
            'alt_phone',
            'email',
            'state'=> 'Required',
            'lga'=> 'Required',
            'marital_status'=> 'Required',
            'occupation',
            'tpid'=> 'Required',
            'bank_name'=> 'Required',
            'acct_number'=> 'Required',
            'bvn'=> 'Required',
            'id_type'=> 'Required',
            'id_number'=> 'Required',
            'nok_fullname'=> 'Required',
            'nok_relationship'=> 'Required',
            'nok_address'=> 'Required',
            'nok_phone' => 'Required'
        ]);
        $notification = Toastr::success('Beneficiary updated successfully','Success');
        Beneficiary::find($id)->update($request->except('_method','_token'));
        return redirect('admin/beneficiaries')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = Toastr::success('Beneficiary deleted successfully','Success');
        Beneficiary::find($id)->delete();
        return redirect('admin/beneficiaries')->with($notification);
    }
}
            