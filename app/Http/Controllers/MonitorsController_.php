<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;

class MonitorsController extends Controller
{
   //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $arr['monitors']= Monitor::all();
        return view('admin.users.index')->with($arr);
    }

    public function search($q = 'Mark Davidson'){
        print_r( Monitor::find(1));
    }

}
