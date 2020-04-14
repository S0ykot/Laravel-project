<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class login extends Controller
{
    public function index(){
    	return view('generalLogin.content');
    }


    public function verify(Request $req){
    	$user = user::where('user_id_name', $req->uname)
    				->where('password', $req->password)
    				->where('rid', 1)
    				->first();
    	
    	if($user!=null){
    		$req->session()->put('username', $req->uname);
    		$req->session()->put('password', $req->password);
    		return redirect()->route('adminHome.index');
    	}else{
    		$req->session()->flash('msg', 'Invalid Username or Password');
    		return redirect('/login');
    	}

    }
}
