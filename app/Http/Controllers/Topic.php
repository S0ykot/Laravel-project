<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Thesis_type;
use App\Sub_domain;
use App\Domain_research;
use App\Faculty;
use App\Research_group;

class Topic extends Controller
{
    public function index(Request $req)
    {
    	$type = Thesis_type::all();
    	$domain = Domain_research::all();
    	$faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();

    	return view('faculty.topicAdd.content',['type'=>$type,
												'domain'=>$domain,
												'faculty'=>$faculty]);
    }

    public function addTopic(Request $req)
    {
    	$validate = Validator::make($req->all(), [
            'topicName' => 'required',
            'type' => 'required',
            'domain' => 'required',
            'topicDes' => 'required',
        ]);

    	if ($validate->fails()) {
    		return redirect('/topicAdd')
                        ->withErrors($validate)
                        ->withInput();
    	}
    	else
    	{
    		$SD = new Sub_domain;
    		$SD->subDom_id = NULL;
    		$SD->subDom_name = $req->topicName;
    		$SD->subDom_desc = $req->topicDes;
    		$SD->type_id = $req->type;
    		$SD->dom_id = $req->domain;
    		$SD->fid = $req->supervisor;

    		

    		if ($SD->save()) {
    			$group = new Research_group;
    			$id = Sub_domain::orderBy('subDom_id', 'desc')->first();
    			$group->group_id = NULL;
    			$group->subDom_id = $id['subDom_id'];
    			if ($group->save()) {
    				return redirect('/topicAdd')
                        ->withErrors('New Topic Added');
    			}
    			else
    			{
    				return redirect('/topicAdd')
                        ->withErrors('Something Wrong');
    			}
    			
    		}
    		else
    		{
    			return redirect('/topicAdd')
                        ->withErrors('Something Wrong');
    		}

    	}
    }


    public function viewTopic(Request $req)
    {

    	$faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();
    	$fid = $faculty['fid'];
    	$details = DB::select('SELECT * FROM sub_domain,research_group,domain_research,thesis_type WHERE sub_domain.dom_id=domain_research.dom_id AND sub_domain.subDom_id=research_group.subDom_id AND thesis_type.type_id=sub_domain.type_id AND sub_domain.fid=? order by research_group.group_id ASC',[$fid]);
    	  

    	 return view('faculty.viewTopic.content',['details'=>$details]);
    }





}
