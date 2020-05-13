<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileUpload extends Controller
{
    public function index(Request $req)
    {
    	$group = DB::select("SELECT * FROM semester WHERE sem_status=1");

    	return view('faculty.uploadFile.content',['sem'=>$group]);
    }

    public function semWise($id,Request $req)
    {
    	$data = DB::select("SELECT * FROM sub_domain,research_group,domain_research,thesis_type,semester WHERE sub_domain.dom_id=domain_research.dom_id AND sub_domain.subDom_id=research_group.subDom_id AND thesis_type.type_id=sub_domain.type_id AND sub_domain.fid=(SELECT fid FROM faculty WHERE faculty.faculty_id=?) AND semester.sem_id=".$id." order by research_group.group_id ASC",[$req->session()->get('username')]);

    	return view('faculty.ajaxSearch.ajaxDomainSem',['data'=>$data]);
    }
}
