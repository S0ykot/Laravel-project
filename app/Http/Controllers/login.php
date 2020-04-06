<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\DB;

class login extends Controller
{
    public function index(){
    	return view('generalLogin.content');
    }

    public function verify(Request $req){
    	$user = user::where('user_id_name', $req->uname)
    				->where('password', $req->password)
    				->where('rid', 3)
    				->first();
    	
    	if($user!=null){
    		$req->session()->put('username', $req->uname);
    		$req->session()->put('password', $req->password);
    		return redirect()->route('studentHome');
    	}else{
    		$req->session()->flash('msg', 'Invalid Username or Password');
    		return redirect('/login');
    	}

    }
}
