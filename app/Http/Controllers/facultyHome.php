<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Faculty;
use App\User;

class facultyHome extends Controller
{
    public function index()
    {
    	return view('faculty.home.content');
    }

    public function profileDetails(Request $req)
    {
    	$faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();
    	return view('faculty.profile.content',['details'=>$faculty]);
    }

    public function updateProfile(Request $req)
    {
    	$validate = Validator::make($req->all(), [
            'fname' => 'required|max:30',
            'lname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

    	if ($validate->fails()) {
    		return redirect('/profile')
                        ->withErrors($validate)
                        ->withInput();
    	}
    	else
    	{
    		$user = User::where('user_id_name',$req->session()->get('username'))->first();

    		$faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();

    		$faculty->faculty_fname = $req->fname;
    		$faculty->faculty_lname = $req->lname;
    		$faculty->faculty_email = $req->email;

    		if ($user->password!=$req->password) {
    			return redirect('/profile')->withErrors("Current Password Wrong");
    		}
    		else
    		{
    			if ($faculty->save()) {
    				return redirect('/profile')->withErrors("Profile Update successfully");
    			}
    		}
    	}
    }
}


