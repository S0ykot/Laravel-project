<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\domain_research;
use App\faculty;
use App\thesis_type;
use App\sub_domain;
use Illuminate\Support\Facades\DB;

class studentTopicsWindow extends Controller
{
    public function index(){

    	$subDom = DB::table('sub_domain')
    				->join('domain_research','sub_domain.dom_id','=','domain_research.dom_id')
    				->join('faculty','sub_domain.fid','=','faculty.fid')
    				->join('thesis_type','sub_domain.type_id','=','thesis_type.type_id')
    				->get();
    	return view('student.topics.Available.content')->with(['subDom'=>$subDom]);
    }

    public function topicDetails(Request $req, $id){
    	$subDom = DB::table('sub_domain')
    				->join('domain_research','sub_domain.dom_id','=','domain_research.dom_id')
    				->join('faculty','sub_domain.fid','=','faculty.fid')
    				->join('thesis_type','sub_domain.type_id','=','thesis_type.type_id')
    				->where('subDom_id',$id)
    				->first();
    	return view('student.topics.Details.content')->with(['subDom'=>$subDom]);
    }
}
