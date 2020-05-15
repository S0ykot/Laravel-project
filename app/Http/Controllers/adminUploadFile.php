<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\uploadRequest;
use App\researchGroup;
use App\file;

class adminUploadFile extends Controller
{
    public function index(){
        
        $groups = researchGroup::all();

        return view('admin.adminUploadFile.index', ['group'=>$groups]);
    }


     public function fileUpload(uploadRequest $req){
           
        $upload = new file();
        $upload->fileName = $req->session()->get('username').'_'.'Group_No.-'.$req->group_id.'_'.$req->file('file')->getClientOriginalName();
        $upload->filePath = $req->file('file')->store('public/upload/admin');
        $upload->group_id = $req->group_id;

        if($upload->save()){

            return redirect()->route('adminHome.index');
        }else{
            
            return redirect()->route('adminUploadFile.index');
        }
    
	}
    
}
