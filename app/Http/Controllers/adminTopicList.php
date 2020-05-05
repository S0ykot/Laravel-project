<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\topicRequest;
use Illuminate\Support\Facades\DB;
use App\subDomain;
use App\researchDomain;
use App\faculty;
use App\thesisType;
use App\researchGroup;

class adminTopicList extends Controller
{
    public function index(){

        $topics = DB::select("select sub_domain.subDom_id,sub_domain.subDom_name,sub_domain.subDom_desc,thesis_type.type_name,domain_research.dom_name,faculty.faculty_fname,faculty.faculty_lname from sub_domain,thesis_type,domain_research,faculty where sub_domain.type_id=thesis_type.type_id and sub_domain.dom_id=domain_research.dom_id and sub_domain.fid=faculty.fid");

        return view('admin.adminTopicList.index', ['topic'=>$topics]);
    }
}
