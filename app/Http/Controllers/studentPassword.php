<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Student;

class studentPassword extends Controller
{
    public function index(){
    	return view('student.changePassword.content');
    }

    public function update(Request $req){
    	$user = user::where('user_id_name',$req->session()->get('username'))->first();
    	$user->password = $req->newPass;
    	$user->save();
    	$req->session()->flash('success', 'Password Updated! You Must Login Again');
    	return redirect('/login');
    }
}
