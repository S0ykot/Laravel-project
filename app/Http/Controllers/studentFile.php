<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file;
use App\student;
use App\research_group;
use App\student_thesis;
use Illuminate\Support\Facades\DB;

class studentFile extends Controller
{
    public function uploadIndex(){
    	return view('student.upload.content');
    }

    public function downloadIndex(Request $req){
    	$group = DB::table('student_thesis')
    				->join('research_group','research_group.group_id','=','student_thesis.group_id')
    				->join('student','student.sid','=','student_thesis.sid')
    				->where('student.student_id',$req->session()->get('username'))
    				->first();
    	if($group==null){
    		$req->session()->flash('group_alert','Oops! You have no group yet!!');
    		return view('student.download.content');
    	}
    	$files = file::where('group_id',$group->group_id)->get();
    	if(count($files)==0){
    		$req->session()->flash('group_alert','No Files to Download');
    		return view('student.download.content');
    	}
    	return view('student.download.content')->with(['files'=>$files]);
    }
}
