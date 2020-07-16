<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use App\Beneficiary;
use Spatie\QueryBuilder\AllowedFilter;
use App\Programme;


class SearchController extends Controller
{
    //
    public function index(Request $req){
        $data = QueryBuilder::for(Beneficiary::class)
                ->allowedFields([
                  'gender',
                  'state',
                  'lga',
                  'marital_status',
                  'get_programme_relation.prog_code',
                  'get_programme_relation.name'

                  ])
                ->allowedIncludes(['getProgrammeRelation'])
                ->allowedFilters([
                  AllowedFilter::exact('gender'),
                  'dob',
                  AllowedFilter::exact('state'),
                  AllowedFilter::exact('lga'),
                  AllowedFilter::exact('marital_status'),
                  AllowedFilter::exact('progID'),
                ])
                ->paginate(10)
                ->appends(request()->query());

        // dump($req->query);
        //  return ($data);
      
        $data2 = Programme::orderBy('id','asc')->paginate(10)->setPath('beneficiaries');
        return view('admin.beneficiaries.index',compact(['data','data2']));
      //  return view('home')->with(compact(['result']));
    }
}
