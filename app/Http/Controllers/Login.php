<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Login extends Controller
{
    public function index()
    {
    	return view('generalLogin.content');
    }

    public function authCheck(Request $req)
    {
    	$user = user::where('user_id_name', $req->uname)
    				->where('password', $req->password)
    				->where('rid', 2)
    				->first();
    	
    	if($user!=null){
    		$req->session()->put('username', $req->uname);
    		$req->session()->put('token', md5(md5($req->password)));
    		return redirect('/home');
    	}else{
    		$req->session()->flash('msg', 'Invalid Username or Password');
    		return redirect('/');
    	}

    }
}
